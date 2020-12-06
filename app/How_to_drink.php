<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class How_to_drink extends Model
{
    public function reputations(){
        return $this->hasMany(Reputation::class);
    }
    //
}
