<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function address(){
       return $this->hasOne('App\Address');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function isAdmin(){
        if(Auth::user()->status == 1){
            return true;
        }else{
            return false;
        }
    }

}
