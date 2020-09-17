<?php

namespace App\Http\Controllers;

//use App\RegisterMarket;
use Illuminate\Http\Request;
use App\Logic\MarketLogic;

class RegisterMarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $req = new MarketLogic();
        $items = $req->getAll();

        //$req = new OfferLogic();
        //$items = $req->getAll();

        // dd($items[0]);
        return response()->json([
            'status_code' => 200,
            'pubs' => $items
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
        $req = new MarketLogic($request);
        $notify = $req->store();

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegisterMarket  $registerMarket
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterMarket $registerMarket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegisterMarket  $registerMarket
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterMarket $registerMarket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegisterMarket  $registerMarket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterMarket $registerMarket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegisterMarket  $registerMarket
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterMarket $registerMarket)
    {
        //
    }
}
