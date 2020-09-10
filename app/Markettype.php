<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markettype extends Model
{
    //
    protected $table = 'markettypes';
    protected $fillable = ['name_tp'];//es el campo que puede ser llenado en la base de datos
}
