<?php

namespace App\Logic;

use Illuminate\Http\Request;
use App\Location;

class LocationLogic
{
    private $req;

    public function __construct(Request $req = null) {
        $this->req = $req;
    }
    //Obtiene todos las ubicaciones 
    public function getAll()
    {
        $items = Location::all();

        foreach ($items as $item) {
            $item->lat = auth()->user()->location->lat;
            $item->lng = auth()->user()->location->lng;
        }

        return $items;
    }

    // obtiene ubicacion por usuario
    public function getOne(Int $user_id)
    {
        $item = Location::findOrFail($user_id);

        return $item;
    }


    public function store()
    {

        $this->saveLocation();

        return "Ubicacion creada";
    }

    public function update(Int $user_id)
    {

        $this->updateLocation($user_id);

        return "Locacion actualizada";
    }

    public function destroy(Int $user_id)
    {
        $this->deleteLocation($user_id);

        return "Locacion eliminada";
    }



    private function saveLocation()
    {
        $item = new Location;
        $item->user_id = auth()->user()->id;
        $item->lat = $this->req->lat;
        $item->lng = $this->req->lng;
        $item->save();
    }

    private function updateLocation(Int $user_id)
    {
        $item = Location::findOrFail($user_id);
        $item->lat = $this->req->lat;
        $item->lng = $this->req->lng;
        $item->save();
    }

    private function deleteLocation(Int $user_id)
    {
        $item = Location::findOrFail($user_id);
        $item->delete();
    }
}
