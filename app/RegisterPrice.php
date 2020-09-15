<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterPrice extends Model
{
    //
    protected $table = 'register_prices';
    protected $fillable = ['date_price','price_prod'];
    protected $dates = ['created_at', 'updated_at'];
    
    public function registerSystemProd()
    {
        return $this->belongsTo('App\RegisterSystemProduct');
    }

    public function market()
    {
        return $this->belongsTo('App\RegisterMarket');
    }

    public function measure()
    {
        return $this->belongsTo('App\UnitMeasure');
    }

}
