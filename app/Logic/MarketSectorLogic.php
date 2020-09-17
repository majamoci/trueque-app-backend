<?php

namespace App\Logic;

use Illuminate\Http\Request;
use App\Exceptions\ApiErrorException;
use Illuminate\Support\Facades\Validator;
use App\RegisterMarketSector;


class MarketSectorLogic{
    private $req;

    public function __construct(Request $req = null) {
        $this->req = $req;
    }

    public function store()
    {
        $this->validate();

        $this->saveMarketSector();

        return "El sector para un mercado se ha creado";
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

    private function saveMarketSector()
    {
        $item = new RegisterMarketSector;
        $item->name_str = $this->req->name_str;
        $item->direction_str = $this->req->direction_str;
        $item->save();
    }

    public function getAll()
    {
        
        $items=RegisterMarketSector::select('id', 'name_str')
        ->get();
        return $items;
        
    }

}
