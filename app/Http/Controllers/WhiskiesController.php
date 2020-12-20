<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Whisky;

class WhiskiesController extends Controller
{
    public function show($id){
        $whisky = Whisky::findOrFail($id);
        $whisky->loadRelationshipCounts();
        return view('whisky.show',[
            'whisky' => $whisky,
            ]);
    }
    
    //
}
