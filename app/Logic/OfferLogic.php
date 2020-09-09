<?php

namespace App\Logic;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Exceptions\ApiErrorException;
use App\Offer;
use App\Product;

class OfferLogic
{
    private $req;

    public function __construct(Request $req = null) {
        $this->req = $req;
    }


    public function getAll()
    {
        $products = auth()->user()->products;

        $items = $products->filter(function ($item) {
            $offers = $item->offers->map(function ($offr) {
                $offr->photos = json_decode($offr->photos, true);

                return $offr;
            })->values()->toArray();

            return $offers;
        })->values()->toArray();

        return $items;
    }


    public function getOne(Int $id)
    {
        $item = Offer::findOrFail($id);

        $item->photos = json_decode($item->photos, true);

        return $item;
    }


    public function store()
    {
        $this->validate();

        $this->saveProduct();

        return "Oferta creada";
    }


    public function destroy(Int $id)
    {
        $this->deleteProduct($id);

        return "Oferta eliminada";
    }


    private function validate()
    {
        $validator = Validator::make($this->req->all(), [
            'address' => 'required|string|max:100',
            'description' => 'required|string|max:500',
            'photos' => 'required',
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


    private function saveProduct()
    {
        $item = new Offer;
        $item->user_id = $this->req->user_id;
        $item->product_id = $this->req->product_id;
        $item->address = $this->req->address;
        $item->description = $this->req->description;
        $item->photos = $this->uploadImagesAndGetJson();
        $item->save();
    }


    private function deleteProduct(Int $id)
    {
        $item = Offer::findOrFail($id);

        $rm_items = json_decode($item->photos, true);

        foreach ($rm_items as $path) {
            Storage::disk('public')->delete($path);
        }

        $item->delete();
    }
}
