<?php

namespace App\Logic;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Exceptions\ApiErrorException;
use App\Product;

class ProductLogic
{
    private $req;

    public function __construct(Request $req = null) {
        $this->req = $req;
    }


    public function getAll()
    {
        $user_id = auth()->user()->id;

        $items = Product::whereUserId($user_id)
            ->get();

        foreach ($items as $item) {
            $item->price = (float) $item->price;
        }

        return $items;
    }


    public function getOne(Int $id)
    {
        $item = Product::findOrFail($id);

        $item->price = (float) $item->price;

        return $item;
    }


    public function store()
    {
        $this->validate();

        $this->saveProduct();

        return "Producto creado";
    }


    public function update(Int $id)
    {
        $this->validate();

        $this->updateProduct($id);

        return "Producto actualizado";
    }


    public function destroy(Int $id)
    {
        $this->deleteProduct($id);

        return "Producto eliminado";
    }


    private function validate()
    {
        $validator = Validator::make($this->req->all(), [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string'
        ]);

        // si la validacion falla
        if ($validator->fails()) {
            return response()->json([
                'status_code' => 403,
                'errors' => $validator->errors(),
            ], 403);
        }
    }


    private function saveProduct()
    {
        $item = new Product;
        $item->user_id = auth()->user()->id;
        $item->name = $this->req->name;
        $item->price = $this->req->price;
        $item->category = $this->req->category;
        $item->save();
    }


    private function updateProduct(Int $id)
    {
        $item = Product::findOrFail($id);
        $item->name = $this->req->name;
        $item->price = $this->req->price;
        $item->category = $this->req->category;
        $item->save();
    }


    private function deleteProduct(Int $id)
    {
        $item = Product::findOrFail($id);

        $item->delete();
    }
}
