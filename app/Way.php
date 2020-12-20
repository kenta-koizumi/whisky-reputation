<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Way extends Model
{
    
    public function reputations(){
        return $this->hasMany(Reputation::class);
    }
    //
}
