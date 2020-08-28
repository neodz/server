<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    //use SoftDeletes;
    //use HasRoles;

    public function tourist(){
        return $this->hasOne(Tourist::class);
    }
    protected $fillable = [
        'name', 'email', 'password','phone'
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

    protected $dates = [
        'deleted_at'
    ];

    protected $attributes = [
        //'menuroles' => 'user',
    ];


    public function is_super_admin(){
        //dd($this->role===1);
        return $this->role==1;
    }
    public function is_admin(){
        return $this->role==2;
    }
    public function is_tourist(){
        return $this->role==3;
    }
}
