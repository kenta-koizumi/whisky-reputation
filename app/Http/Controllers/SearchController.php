<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class SearchController extends Controller
{
    public function index(Request $request){
    //    $search1 = $request->input('category');
        $search2 = $request->input('keyword');
    
    //if($search1 == 'user_name'){
      $query = User::where('name', 'like', '%'.$search2.'%')->get(); 
    //}else{
      //  $query = where('whisky_name', 'like', '%'.$search2.'%')->get();
    //}
    
    $data = $query;
    
    return view('search',[
        'data' => $data]);
    }
    //
}
