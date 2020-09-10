<?php

namespace App\Logic;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Exceptions\ApiErrorException;
use App\Trueque;
use App\Publication;
use App\Offer;

class TruequeLogic
{
    private $req;

    public function __construct(Request $req = null) {
        $this->req = $req;
    }


    /**
     * Retorna todas mis ofertas a publicaciones
     */
    public function getAllByOffers()
    {
        $user_id = auth()->user()->id;
        $items = Trueque::whereHas('offer', function($query) use ($user_id) {
            $query->whereUserId($user_id);
        })->get();



        return $items;
    }


    /**
     * Retorna todas mis publicaciones que han sido ofertadas
     */
    public function getAllByPubs()
    {
        $user_id = auth()->user()->id;

        $items = Trueque::whereHas('pub', function($query) use ($user_id) {
            $query->whereUserId($user_id);
        })->get();

        return $items;
    }


    /**
     * Retorna todas mis publicaciones que han sido ofertadas
     */
    public function changeStatus()
    {
        $item = Trueque::find($this->req->trueque_id);
        $item->status = $this->req->status;
        $item->save();

        return "Operacion realizada: {$this->req->status}";
    }
}
