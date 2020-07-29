<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\User;
use App\Publication;
use App\PubTransaction;
use App\Logic\HomeLogic;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($state)
    {
        $user_id = auth()->user()->id;

        // TODO: paginar las peticiones a futuro
        $publications = PubTransaction::whereUserId($user_id)
            ->whereState($state)
            ->with('pub:id,title,price,category,photos')->get('pub_id');

        return response()->json([
            'status_code' => 200,
            'publications' => $publications
        ], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexActivePubs($category)
    {
        $items = new HomeLogic();
        $publications = $items->getActivePubs($category);

        return response()->json([
            'status_code' => 200,
            'publications' => $publications
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $user_id = auth()->user()->id;

            // validamos errores en el request
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|min:3|max:100',
                'price' => 'required|numeric',
                'address' => 'required|string|max:100',
                'category' => 'required|string|max:50',
                'available' => ['required', 'string', Rule::in(['one', 'multiple'])],
                'description' => 'required|string|min:10|max:500',
                'photos' => 'required',
                'state' => ['required', 'string', Rule::in(['draft', 'published'])]
            ]);

            // si la validacion falla
            if ($validator->fails()) {
                return response()->json([
                    'status_code' => 403,
                    'errors' => $validator->errors(),
                ], 403);
            }

            // verificamos si se subieron archivos
            $json_files = "{}";
            if ($request->hasFile('photos')) {
                $files = $request->photos;
                $new_files = [];

                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();
                    $file_name = time()."_{$name}";

                    // Subimos el archivo al disco public
                    $path = $file->storeAs('/publications', $file_name, 'public');

                    // creamos el array de rutas de archivo
                    $new_files[] = array(
                        'name' => $name,
                        'path' => $path,
                    );
                }
                // transformamos el array a json

                $json_files = json_encode($new_files);
            }

            // creamos y guardamos la publicacion
            $new_pub = new Publication;
            $new_pub->title = $request->title;
            $new_pub->price = $request->price;
            $new_pub->address = $request->address;
            $new_pub->category = $request->category;
            $new_pub->available = $request->available;
            $new_pub->description = $request->description;
            $new_pub->photos = $json_files;
            $new_pub->save();

            // creamos la transaccion
            $new_transac = new PubTransaction;
            $new_transac->state = $request->state;
            $new_transac->user_id = $user_id;
            $new_transac->pub_id = $new_pub->id;
            $new_transac->save();

            return response()->json([
                'status_code' => 200,
                'message' => 'Publicación creada',
                'id' => $new_transac->id
            ], 200);
        } catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'errors' => $error,
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $Publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $Publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $Publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            // validamos errores en el request
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|min:3|max:100',
                'price' => 'required|numeric',
                'address' => 'required|string|max:100',
                'category' => 'required|string|max:50',
                'available' => ['required', 'string', Rule::in(['one', 'multiple'])],
                'description' => 'required|string|min:10|max:500',
                'state' => ['required', 'string', Rule::in(['draft', 'published'])]
            ]);

            // si la validacion falla
            if ($validator->fails()) {
                return response()->json([
                    'status_code' => 403,
                    'errors' => $validator->errors(),
                ], 403);
            }

            // actualizamos la transaccion
            $update_transac = PubTransaction::find($id);
            $update_transac->state = $request->state;
            $update_transac->save();

            // actualizamos la publicacion
            $update_pub = Publication::find($update_transac->pub->id);
            $update_pub->title = $request->title;
            $update_pub->price = $request->price;
            $update_pub->address = $request->address;
            $update_pub->category = $request->category;
            $update_pub->available = $request->available;
            $update_pub->description = $request->description;
            // $update_pub->photos = $json_files;
            $update_pub->save();

            return response()->json([
                'status_code' => 200,
                'message' => 'Publicación actualizada',
            ], 200);
        } catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'errors' => $error,
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $Publication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $delete_transac = PubTransaction::find($id);
            $delete_transac->pub()->delete();
            $delete_transac->delete();
            // PubTransaction::destroy($id);

            return response()->json([
                'status_code' => 200,
                'message' => 'Publicación eliminada',
            ], 200);
        } catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'errors' => $error,
            ], 500);
        }
    }
}
