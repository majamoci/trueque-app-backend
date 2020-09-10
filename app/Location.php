<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $primaryKey = 'user_id';
    protected $fillable = ['lat', 'lng'];

    // TODO: Solo es necesario acceder si desde la localiacion queremos operar en la Tabla User
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
