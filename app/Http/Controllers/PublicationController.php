<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\User;
use App\Publication;
use App\PubTransaction;
use App\Logic\PublicationLogic;

class PublicationController extends Controller
{
    public function index($state)
    {
        $req = new PublicationLogic();
        $items = $req->getAll($state);

        return response()->json([
            'status_code' => 200,
            'pubs' => $items
        ] , 200);
    }


    public function categories($category)
    {
        $items = new PublicationLogic();
        $publications = $items->getActivePubs($category);

        return response()->json([
            'status_code' => 200,
            'pubs' => $publications
        ], 200);
    }


    public function store(Request $request)
    {
        $req = new PublicationLogic($request);
        $notify = $req->store();

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }


    public function show($id)
    {
        $req = new PublicationLogic();
        $item = $req->getOne($id);

        return response()->json([
            'status_code' => 200,
            'pub' => $item
        ] , 200);
    }


    public function update(Request $request, $id)
    {
        $req = new PublicationLogic($request);
        $notify = $req->update($id);

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }


    public function destroy($id)
    {
        $req = new PublicationLogic();
        $item = $req->destroy($id);

        return response()->json([
            'status_code' => 200,
            'message' => $item
        ] , 200);
    }
}
