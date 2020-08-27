<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logic\ProductLogic;

class ProductController extends Controller
{
    public function index()
    {
        $req = new ProductLogic();
        $items = $req->getAll();

        return response()->json([
            'status_code' => 200,
            'products' => $items
        ] , 200);
    }


    public function store(Request $request)
    {
        $req = new ProductLogic($request);
        $notify = $req->store();

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }


    public function show($id)
    {
        $req = new ProductLogic();
        $item = $req->getOne($id);

        return response()->json([
            'status_code' => 200,
            'product' => $item
        ], 200);
    }


    public function update(Request $request, $id)
    {
        $req = new ProductLogic($request);
        $notify = $req->update($id);

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }


    public function destroy($id)
    {
        $req = new ProductLogic();
        $notify = $req->destroy($id);

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }
}
