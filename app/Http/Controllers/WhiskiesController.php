<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Whisky;

class WhiskiesController extends Controller
{
    public function show($id){
        

        $whisky = Whisky::findOrFail($id);
        $whisky->loadRelationshipCounts();
        
        $reputations = $whisky->reputations()->paginate(5);
        
        
        
        return view('whisky.show',[
            'whisky' => $whisky,
            'reputations' => $reputations,
            ]);
    }
    
    //
}
