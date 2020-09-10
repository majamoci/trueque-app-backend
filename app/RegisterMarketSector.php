<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterMarketSector extends Model
{
    //
    protected $table = 'register_market_sectors';
    protected $fillable = ['name_str','direction_str'];//es el campo que puede ser llenado en la base de datos
}
