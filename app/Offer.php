<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';
    protected $fillable = ['address', 'description', 'photos'];
    protected $dates = ['created_at', 'updated_at'];

    public function trueque()
    {
        return $this->hasMany('App\Trueque');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

