<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logic\TruequeLogic;

class TruequeController extends Controller
{
    public function pubs()
    {
        $req = new TruequeLogic();
        $items = $req->getAllByPubs();

        return response()->json([
            'status_code' => 200,
            'by_pubs' => $items
        ] , 200);
    }


    public function offers()
    {
        $req = new TruequeLogic();
        $items = $req->getAllByOffers();

        return response()->json([
            'status_code' => 200,
            'by_offers' => $items
        ] , 200);
    }


    public function action(Request $request)
    {
        $req = new TruequeLogic($request);
        $notify = $req->changeStatus();

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }
}
