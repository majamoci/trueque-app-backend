<?php

namespace App\Http\Controllers;

use App\RegisterCategory;
use Illuminate\Http\Request;
use App\Logic\CategoryLogic;

class RegisterCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $req = new CategoryLogic();
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
    public function store(Request $request)//para guardar 
    {
        //
        $req = new CategoryLogic($request);
        $notify = $req->store();

        return response()->json([
            'status_code' => 200,
            'message' => $notify
        ] , 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegisterCategory  $registerCategory
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterCategory $registerCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegisterCategory  $registerCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterCategory $registerCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegisterCategory  $registerCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterCategory $registerCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegisterCategory  $registerCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterCategory $registerCategory)
    {
        //
    }
}
