<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function publications()
    {
        return $this->hasMany('App\Publication');
    }

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }

    public function roles()
    {
        return $this->hasMany('App\Role');
    }

    public function profile() {
        return $this->hasOne('App\Profile');
    }

    public function location() {
        return $this->hasOne('App\Location');
    }
}
