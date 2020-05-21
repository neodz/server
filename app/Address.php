<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function wilaya(){
        return $this->belongsTo(Wilaya::class);
    }
    public function touristicplace(){
        return $this->hasOne(TouristicPlace::class);
    }
    public function touristicactivity(){
        return $this->hasOne(TouristicActivity::class);
    }
    public function service(){
        return $this->hasOne(Service::class);
    }
}
