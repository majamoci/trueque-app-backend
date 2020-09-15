<?php

namespace App\Logic;

use Illuminate\Http\Request;
use App\Exceptions\ApiErrorException;
use Illuminate\Support\Facades\Validator;

use App\UnitMeasure;

class UnitMeasureLogic {
    private $req;

    public function __construct(Request $req = null) {
        $this->req = $req;
    }

    public function store()
    {
        $this->validate();

        $this->saveUnitMeasure();

        return "Unidad de medida creado";
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



    private function saveUnitMeasure()
    {
        $item = new UnitMeasure;
        //$item->user_id = auth()->user()->id;
        $item->name_measure = $this->req->name_measure;
        //$item->price = $this->req->price;
        //$item->category = $this->req->category;
        $item->save();
    }

}