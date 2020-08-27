<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PubTransaction extends Model
{
    protected $table = "trueques";
    protected $fillable = ['pub_id', 'offer_id', 'status'];

    public function pub() {
        return $this->belongsTo('App\Publication');
    }

    public function offer() {
        return $this->belongsTo('App\Offer');
    }
}
