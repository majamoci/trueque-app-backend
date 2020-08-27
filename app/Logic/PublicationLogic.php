<?php

namespace App\Logic;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Exceptions\ApiErrorException;
use App\Product;
use App\Publication;

class PublicationLogic
{
    private $req;

    public function __construct(Request $req = null) {
        $this->req = $req;
    }


    public function getAll(String $state)
    {
        $id = auth()->user()->id;

        $items = DB::table('publications')
            ->join('products', 'products.id', '=', 'publications.product_id')
            ->select(
                'publications.id',
                'publications.product_id',
                'publications.title',
                'publications.address',
                'publications.available',
                'publications.description',
                'publications.photos',
                'products.category'
            )->where("publications.user_id", $id)
            ->where("publications.status", $state)->get();

        foreach ($items as $item) {
            $item->photos = json_decode($item->photos, true);
            $item->lat = auth()->user()->location->lat;
            $item->lng = auth()->user()->location->lng;
        }

        return $items;
    }


    public function getOne(Int $id)
    {
        $item = Publication::findOrFail($id);

        $item->photos = json_decode($item->photos, true);
        $item->product;

        return $item;
    }


    public function getActivePubs(String $category)
    {
        $pubs = Publication::whereStatus('published')
            ->take(10)->get();

        $items = $pubs->filter(function ($item) use (&$category) {
            $item->photos = json_decode($item->photos, true);

            return $item->product->category === $category;
        });

        return $items;
    }


    public function store()
    {
        $this->validate();

        $this->saveProduct();

        return "Publicación creada";
    }


    public function update(Int $id)
    {
        $this->validate('nullable');

        $this->updateProduct($id);

        return "Publicación actualizada";
    }


    public function destroy(Int $id)
    {
        $this->deletePublication($id);

        return "Publicación eliminada";
    }


    private function validate(String $photos = "required")
    {
        $validator = Validator::make($this->req->all(), [
            'title' => 'required|string|min:3|max:100',
            'address' => 'required|string|max:100',
            'available' => ['required', 'string', Rule::in(['one', 'multiple'])],
            'description' => 'required|string|min:10|max:500',
            'photos' => $photos,
            'status' => ['required', 'string', Rule::in(['draft', 'published'])]
        ]);

        // si la validacion falla
        if ($validator->fails()) {
            return response()->json([
                'status_code' => 403,
                'errors' => $validator->errors(),
            ], 403);
        }
    }


    private function uploadAngGetImgName($image, String $sub_name)
    {
        $img = Image::make($image)
            ->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('jpg');

        $name = time()."_{$sub_name}.jpg";

        Storage::disk('public')->put($name, $img);

        return $name;
    }


    private function uploadImagesAndGetJson()
    {
        $new_photos = [];

        if ($this->req->hasFile('photos')) {
            $images = $this->req->photos;

            foreach ($images as $key => $image) {
                $new_photos[] = array(
                    'path' => $this->uploadAngGetImgName($image, (string) $key)
                );
            }

            return json_encode($new_photos);
        }
    }


    private function replaceImagesAndGetJson($photos)
    {
        $old_photos = json_decode($photos, true);

        if ($this->req->hasFile('photos')) {
            $images = $this->req->photos;

            // verificamos que old & new sumen 5 items
            $max_images = count($old_photos) + count($images);

            if ($max_images <= 5) {
                foreach ($images as $key => $image) {
                    $old_photos[] = array(
                        'path' => $this->uploadAngGetImgName($image, (string) $key)
                    );
                }

                return json_encode($old_photos);
            } else {
                throw new ApiErrorException("Haz añadido más imágenes de lo permitido", 400);

                return $photos;
            }
        }
    }


    private function saveProduct()
    {
        $item = new Publication;
        $item->product_id = $this->req->product_id;
        $item->title = $this->req->title;
        $item->address = $this->req->address;
        $item->available = $this->req->available;
        $item->description = $this->req->description;
        $item->photos = $this->uploadImagesAndGetJson();
        $item->status = $this->req->status;
        $item->save();
    }


    private function updateProduct(Int $id)
    {
        $item = Publication::findOrFail($id);
        $item->title = $this->req->title;
        $item->address = $this->req->address;
        $item->available = $this->req->available;
        $item->description = $this->req->description;
        $item->status = $this->req->status;
        $item->save();
    }


    private function deletePublication(Int $id)
    {
        $item = Publication::findOrFail($id);

        $rm_items = json_decode($item->photos, true);

        foreach ($rm_items as $path) {
            Storage::disk('public')->delete($path);
        }

        $item->delete();
    }
}
