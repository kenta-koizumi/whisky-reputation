<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Whisky extends Model
{
    public function reputations(){
        return $this->hasMany(Reputation::class);
    }
    
    public function favorite_users(){
        return $this->belongsToMany(User::class, 'fav_whisky', 'whisky_id', 'user_id')->withTimestamps();
    }
    
    public function loadRelationshipCounts(){
        $this->loadCount('reputations');
    }
    //
}
