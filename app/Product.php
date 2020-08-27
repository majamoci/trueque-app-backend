<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'category'];

    public function pubs()
    {
        return $this->hasMany('App\Publication');
    }

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
