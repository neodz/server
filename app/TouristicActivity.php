<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristicActivity extends Model
{
    public function photoactivities(){
        return $this->hasMany(PhotoActivity::class);
    }
    public function address(){
        return $this->belongsTo(Address::class);
    }
}
