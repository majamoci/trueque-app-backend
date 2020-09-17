<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Logic\RegisterPriceLogic;

class RegisterPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $req = new RegisterPriceLogic();
        $items = $req->getAll();

        return response()->json([
            'status_code' => 200,
            'products' => $items
        ] , 200);
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
        $req = new RegisterPriceLogic($request);
        $notify = $req->store();

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegisterPrice  $registerPrice
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterPrice $registerPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegisterPrice  $registerPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterPrice $registerPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegisterPrice  $registerPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterPrice $registerPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegisterPrice  $registerPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterPrice $registerPrice)
    {
        //
    }
}
