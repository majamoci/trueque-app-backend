<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Publication;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            // validamos errores en el request
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|min:3|max:100',
                'price' => 'required|numeric',
                'address' => 'required|string|max:100',
                'category' => 'required|string|max:100',
                'available' => ['required', 'string', Rule::in(['one', 'multiple'])],
                'description' => 'required|string|min:10|max:500',
                'photos' => 'nullable',
                'active' => ['required', 'string', Rule::in(['draft', 'published'])]
            ]);

            // si la validacion falla
            if ($validator->fails()) {
                return response()->json([
                    'status_code' => 403,
                    'errors' => $validator->errors(),
                ], 403);
            }

            // verificamos si se subieron archivos
            $json_files = "";
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
            $new_pub->active = $request->active;
            $new_pub->save();

            return response()->json([
                'status_code' => 200,
                'message' => 'Publicación creada',
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
    public function update(Request $request, Publication $Publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $Publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $Publication)
    {
        //
    }
}
