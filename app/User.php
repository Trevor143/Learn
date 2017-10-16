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
        'name', 'email', 'password', 'isActive','role_id', 'photo_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');

    }

    public function post(){
        return $this->belongsTo('App\Post');

    }

    public function isAdmin(){

        if($this->role->name== 'Admin' && $this->isActive==1){

            return true;

        }

            return false;
//            return view('/welcome');



    }


}
