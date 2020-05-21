<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    public function tours(){
        return $this->hasMany(Tour::class);
    }
}
