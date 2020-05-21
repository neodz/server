<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoActivity extends Model
{
    public function touristicactivity(){
        return $this->belongsTo(TouristicActivity::class);
    }
}
