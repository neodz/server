<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoTour extends Model
{
    public function tour(){
        return $this->belongsTo(Tour::class);
    }
}
