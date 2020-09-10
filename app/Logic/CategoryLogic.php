<?php

namespace App\Logic;

use Illuminate\Http\Request;
use App\Exceptions\ApiErrorException;
use Illuminate\Support\Facades\Validator;

use App\RegisterCategory;

class CategoryLogic{
    private $req;

    public function __construct(Request $req = null) {
        $this->req = $req;
    }

    public function store()
    {
        $this->validate();

        $this->saveCategory();

        return "La categoría de producto se creo";
    }

    private function validate()
    {
        $validator = Validator::make($this->req->all(), [
            'name_measure' => 'required|string'
        ]);

        // si la validacion falla
        if ($validator->fails()) {
            return response()->json([
                'status_code' => 403,
                'errors' => $validator->errors(),
            ], 403);
        }
    }

    private function saveCategory()
    {
        $item = new RegisterCategory;
        $item->name_gtgry = $this->req->name_gtgry;
        $item->description_gtgry = $this->req->description_gtgry;
        $item->save();
    }

}