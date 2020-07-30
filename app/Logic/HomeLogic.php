<?php

namespace App\Logic;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Publication;
use App\PubTransaction;

class HomeLogic {

    public function __construct() {
    }

    public function getActivePubs(String $category)
    {
        // TODO: paginar las peticiones a futuro
        $result = DB::table('pubs_transaction')
            ->join('publications', 'pubs_transaction.pub_id', '=', 'publications.id')
            ->select(
                'publications.id as pub_id',
                'pubs_transaction.id as trans_id',
                'pubs_transaction.state',
                'publications.title',
                'publications.price',
                'publications.category',
                'publications.photos'
            )->where('publications.category', $category)
            ->whereState('published')->get();

        foreach ($result as $item) {
            $item->photos = json_decode($item->photos);
            $item->price = round($item->price, 2);
        }
        return $result;
    }
}
