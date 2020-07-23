<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'publications';
    protected $fillable = ['title', 'price', 'address', 'category', 'available', 'description', 'photos'];

    public function transactions()
    {
        return $this->hasMany('App\PubTransaction');
    }
}
