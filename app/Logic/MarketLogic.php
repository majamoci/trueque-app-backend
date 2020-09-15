<?php

namespace App\Logic;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Exceptions\ApiErrorException;
use App\RegisterMarket;

class MarketLogic{

    private $req;

    public function __construct(Request $req = null) {
        $this->req = $req;
    }

    public function store()
    {
        $this->validate();

        $this->saveMarket();

        return "Mercado creado";
    }

    private function validate()
    {
        $validator = Validator::make($this->req->all(), [
            'name_market' => 'required|string'
        ]);

        // si la validacion falla
        if ($validator->fails()) {
            return response()->json([
                'status_code' => 403,
                'errors' => $validator->errors(),
            ], 403);
        }
    }

    private function saveMarket()
    {
        $item = new RegisterMarket;
        //$item->categories_id = $this->req->id;
        
        $item->marketsectors_id = $this->req->marketsectors_id;
        $item->markettypes_id = $this->req->markettypes_id;
        $item->name_market = $this->req->name_market;
        //$item->price = $this->req->price;
        //$item->category = $this->req->category;
        $item->save();
    }


}