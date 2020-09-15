<?php

namespace App\Logic;

use Illuminate\Http\Request;
use App\Exceptions\ApiErrorException;
use Illuminate\Support\Facades\Validator;

use App\Markettype;


class MarkettypeLogic {
    private $req;

    public function __construct(Request $req = null) {
        $this->req = $req;
    }



    public function store()
    {
        $this->validate();

        $this->saveMarkettype();

        return "Tipo de mercado creado";
    }


    private function validate()
    {
        $validator = Validator::make($this->req->all(), [
            'name_tp' => 'required|string'
        ]);

        // si la validacion falla
        if ($validator->fails()) {
            return response()->json([
                'status_code' => 403,
                'errors' => $validator->errors(),
            ], 403);
        }
    }



    private function saveMarkettype()
    {
        $item = new Markettype;
        //$item->user_id = auth()->user()->id;
        $item->name_tp = $this->req->name_tp;
        //$item->price = $this->req->price;
        //$item->category = $this->req->category;
        $item->save();
    }





}