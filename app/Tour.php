<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public function touristic_places(){
        return $this->belongsToMany(TouristicPlace::class);
    }

    public function tourists(){
        return $this->belongsToMany(Tourist::class);
    }
    public function bonus(){
        return $this->belongsTo(Bonus::class);
    }

    public function phototours(){
        return $this->hasMany(PhotoTour::class);
    }


}
