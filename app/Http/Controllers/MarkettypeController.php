<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logic\MarkettypeLogic;

class MarkettypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//para consulta todos
    {
        //
        $req = new MarkettypeLogic();
        $items = $req->getAll();

        return response()->json([
            'status_code' => 200,
            'markettypes' => $items
        ] , 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //para guardar 
    {
        
        $req = new MarkettypeLogic($request);
        $notify = $req->store();

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Markettype  $markettype
     * @return \Illuminate\Http\Response
     */
    public function show(Markettype $markettype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Markettype  $markettype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Markettype $markettype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Markettype  $markettype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Markettype $markettype)
    {
        //
    }
}
