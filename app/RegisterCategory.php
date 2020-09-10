<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterCategory extends Model
{
    //
    protected $table = 'register_categories';
    protected $fillable = ['name_gtgry','description_gtgry'];//es el campo que puede ser llenado en la base de datos
    
    //modificar el nombre
    public function registerSystemProd()
    {
        return $this->hasMany('App\RegisterSystemProduct');
    }

}
