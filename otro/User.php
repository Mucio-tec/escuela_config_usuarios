<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    //
    use Notifiable;

    protected $fillable = [
        'name','email','password',
    ];

    protected $hidden = [
        'password','remembre_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
