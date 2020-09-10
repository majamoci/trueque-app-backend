<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\Logic\LocationLogic;

class LocationController extends Controller
{
    public function index()
    {
        $req = new LocationLogic();
        $items = $req->getAll();

        // dd($items[0]);
        return response()->json([
            'status_code' => 200,
            'locations' => $items
        ] , 200);
    }


    public function store(Request $request)
    {
        $req = new LocationLogic($request);
        $notify = $req->store();

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }


    public function show($user_id)
    {
        $req = new LocationLogic();
        $item = $req->getOne($user_id);

        return response()->json([
            'status_code' => 200,
            'locations' => $item
        ] , 200);
    }


    public function update(Request $request, $user_id)
    {
        $req = new LocationLogic($request);
        $notify = $req->update($user_id);

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }


    public function destroy($user_id)
    {
        $req = new LocationLogic();
        $item = $req->destroy($user_id);

        return response()->json([
            'status_code' => 200,
            'message' => $item
        ] , 200);
    }
}
