<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterPrice extends Model
{
    //
    protected $table = 'register_prices';
    protected $fillable = ['system_products_id', 'date_price','price_prod'];
    protected $dates = ['created_at', 'updated_at'];

    public function systemProducts()
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
