<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoPlace extends Model
{
    public function place(){
        return $this->belongsTo(TouristicPlace::class);
    }
}
