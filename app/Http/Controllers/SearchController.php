<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class SearchController extends Controller
{
    public function index(Request $request){
        $search = $request->input('keyword');
    
    
    $users = User::where('name', 'like', '%'.$search.'%')->get(); 
    
    return view('users.search',[
        'users' => $users]);
    }
    //
}
