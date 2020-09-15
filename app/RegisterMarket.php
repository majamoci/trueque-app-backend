<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterMarket extends Model
{
    //
    protected $table = 'register_markets';
    protected $fillable = ['name_market'];
    protected $dates = ['created_at', 'updated_at'];

    public function price()
    {
        return $this->hasMany('App\RegisterPrice');
    }

    public function sector()
    {
        return $this->belongsTo('App\RegisterMarketSector');
    }

    public function markettype()
    {
        return $this->belongsTo('App\Markettype');
    }
}
