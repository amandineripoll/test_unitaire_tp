<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Teacher extends Model implements JWTSubject, AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'birthdate'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    /**
     * A Teacher can have many posts
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts() 
    {
        return $this->hasMany('App\Course');
    }

}