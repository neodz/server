<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristicPlace extends Model
{
    public function tours(){
        return $this->belongsToMany(Tour::class);
    }
    public function photoplaces(){
        return $this->hasMany(PhotoPlace::class);
    }
    public function address(){
        return $this->belongsTo(Address::class);
    }


}
