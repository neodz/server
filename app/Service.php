<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function address(){
        return $this->belongsTo(Address::class);
    }
    public function photoservices(){
        return $this->hasMany(PhotoService::class);
    }
    public function tourists(){
        return $this->belongsToMany(Tourist::class);
    }
    public function hotel(){
        return $this->hasOne(Hotel::class);
    }
    public function restaurent(){
        return $this->hasOne(Restaurent::class);
    }
}
