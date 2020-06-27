<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $fillable = [
    'firstname',
    'lastname',
    'gender',
    'birthday',
    'city',
    'telephone',
    'mobile',
    'mobile_2',
    'profession',
    'facebook',
    'twitter',
    'instagram',
    'whatsapp',
    'telegram',
    'interests'
  ];

  protected $primaryKey = "user_id";

  // TODO: Solo es necesario acceder si desde el perfil queremos operar en la Tabla User
  // public function user()
  // {
  //   return $this->belongsTo('App\User');
  // }
}
