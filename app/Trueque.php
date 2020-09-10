<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trueque extends Model
{
    protected $table = "transactions";
    protected $fillable = ['user_id', 'pub_id', 'offer_id', 'status'];

    public function pub() {
        return $this->belongsTo('App\Publication');
    }

    public function offer() {
        return $this->belongsTo('App\Offer');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
