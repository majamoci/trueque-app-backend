<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reset extends Model
{
    protected $fillable = [
        'email', 'code', 'isValid'
    ];
    protected $table = "password_resets";

    const UPDATED_AT = null;
}
