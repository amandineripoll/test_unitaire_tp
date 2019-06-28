<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Room extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $fillable = [
        'room_number', 'capicity',
    ];

    public function Courses()
    {
        return $this->hasMany('App\Courses');
    }

    public function isValid(){
        if((!empty($this->room)) && (!empty($this->lastname)) && $this->age >= 13)
            return 1;
        else
            return 0;
    }
}
