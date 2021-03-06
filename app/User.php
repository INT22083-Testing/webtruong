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

    protected $table = 'users';

    public function giangvien()
    {
        return $this->hasOne('App\Giangvien', 'id_user', 'id');
    }

    public function sinhvien()
    {
        return $this->hasOne('App\Sinhvien', 'id_user', 'id');
    }
}
