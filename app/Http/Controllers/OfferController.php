<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logic\OfferLogic;

class OfferController extends Controller
{
    public function index()
    {
        $req = new OfferLogic();
        $items = $req->getAll();

        return response()->json([
            'status_code' => 200,
            'offers' => $items
        ] , 200);
    }


    public function store(Request $request)
    {
        $req = new OfferLogic($request);
        $notify = $req->store();

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }


    public function show($id)
    {
        $req = new OfferLogic();
        $item = $req->getOne($id);

        return response()->json([
            'status_code' => 200,
            'offer' => $item
        ], 200);
    }


    public function destroy($id)
    {
        $req = new OfferLogic();
        $notify = $req->destroy($id);

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }
}
