<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterSystemProduct extends Model
{
    //
    protected $table = 'register_system_products';
    protected $fillable = ['name_sys_prod'];
    protected $dates = ['created_at', 'updated_at'];


    public function price()
    {
        //hasOne
        return $this->hasMany('App\RegisterPrice');
    }

    public function registerCategory()
    {
        return $this->belongsTo('App\RegisterCategory');
    }
    
}
