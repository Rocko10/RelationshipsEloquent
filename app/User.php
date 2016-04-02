<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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

    public function credential(){

        return $this->hasOne('App\Credential', 'user_id', 'id');

    }

    public function posts(){

        return $this->hasMany('App\Post', 'user_id', 'id');

    }

    public function products(){

        return $this->belongsToMany('App\Product', 'product_user', 'user_id', 'product_id');

    }

    public function games(){

        return $this->hasManyThrough('App\Game', 'App\Console', 'user_id', 'console_id');

    }

}
