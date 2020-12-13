<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reputation extends Model
{
    protected $fillable = ['whisky_id', 'total_score', 'howtodrink_id', 'color_id', 'smell_id', 'taste_id', 'aftertaste_id', 'amount', 'comment'];
    
    
    public function user(){
        return $this->belongsTo(User::class);
        
    }
    
    public function color(){
        return $this->belongsTo(Color::class);
    }
    
    public function smell(){
        return $this->belongsTo(Smell::class);
    }
    
    public function taste(){
        return $this->belongsTo(Taste::class);
    }
    
    public function aftertaste(){
        return $this->belongsTo(Aftertaste::class);
    }
    
    public function Nomikata(){
        
        return $this->belongsTo(Nomikata::class);
    }
    //
}
