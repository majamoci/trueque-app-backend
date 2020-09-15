<?php

namespace App\Logic;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Exceptions\ApiErrorException;
use App\RegisterSystemProduct;

class SystemProductLogic{

    private $req;

    public function __construct(Request $req = null) {
        $this->req = $req;
    }

    public function store()
    {
        $this->validate();

        $this->saveSystemProduct();

        return "Producto creado";
    }

    private function validate()
    {
        $validator = Validator::make($this->req->all(), [
            'name_sys_prod' => 'required|string'
        ]);

        // si la validacion falla
        if ($validator->fails()) {
            return response()->json([
                'status_code' => 403,
                'errors' => $validator->errors(),
            ], 403);
        }
    }

    private function saveSystemProduct()
    {
        $item = new RegisterSystemProduct;
        //$item->categories_id = $this->req->id;
        
        $item->categories_id = $this->req->categories_id;
        $item->name_sys_prod = $this->req->name_sys_prod;
        //$item->price = $this->req->price;
        //$item->category = $this->req->category;
        $item->save();
    }

    public function getAll()
    {
        
        $items=RegisterSystemProduct::select('id', 'name_sys_prod')
        ->get();
        return $items;
        
    }

}