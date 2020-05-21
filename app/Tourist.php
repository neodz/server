<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function phototourist(){
        return $this->hasOne(PhotoTourist::class);
    }

    public function tours(){
        return $this->belongsToMany(Tour::class);
    }
    public function services(){
        return $this->belongsToMany(Service::class);
    }


}
