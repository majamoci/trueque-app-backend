<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logic\UnitMeasureLogic;

class UnitMeasureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $req = new UnitMeasureLogic();
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
        $req = new UnitMeasureLogic($request);
        $notify = $req->store();

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UnitMeasure  $unitMeasure
     * @return \Illuminate\Http\Response
     */
    public function show(UnitMeasure $unitMeasure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnitMeasure  $unitMeasure
     * @return \Illuminate\Http\Response
     */
    public function edit(UnitMeasure $unitMeasure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnitMeasure  $unitMeasure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnitMeasure $unitMeasure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnitMeasure  $unitMeasure
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnitMeasure $unitMeasure)
    {
        //
    }
}
