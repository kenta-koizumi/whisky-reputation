<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Whisky;

class WhiskySearchController extends Controller
{
    public function index(Request $request){
        $search = $request->input('keyword');
    
    
    $whiskies = Whisky::where('whisky_name', 'like', '%'.$search.'%')->get(); 
    
    return view('whisky.search',[
        'whiskies' => $whiskies]);
    }
    //
}
