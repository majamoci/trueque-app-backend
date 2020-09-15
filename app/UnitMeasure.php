<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitMeasure extends Model
{
    //
    protected $table = 'unit_measures';
    protected $fillable = ['name_measure'];//es el campo que puede ser llenado en la base de datos
}
