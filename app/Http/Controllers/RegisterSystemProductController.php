<?php

namespace App\Http\Controllers;

use App\RegisterSystemProduct;
use Illuminate\Http\Request;
use App\Logic\SystemProductLogic;

class RegisterSystemProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $req = new SystemProductLogic($request);
        $notify = $req->store();

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegisterSystemProduct  $registerSystemProduct
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterSystemProduct $registerSystemProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegisterSystemProduct  $registerSystemProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterSystemProduct $registerSystemProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegisterSystemProduct  $registerSystemProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterSystemProduct $registerSystemProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegisterSystemProduct  $registerSystemProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterSystemProduct $registerSystemProduct)
    {
        //
    }
}
