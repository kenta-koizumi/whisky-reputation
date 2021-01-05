<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function show($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
        $user->loadRelationshipCounts();
        $reputations = $user->feed_reputations()->orderBy('created_at', 'desc')->paginate(4);
        // ユーザ詳細ビューでそれを表示
        return view('users.show', [
            'user' => $user,
            'reputations' => $reputations,
        ]);
    }
    
    public function followings($id){
        $user = User::findOrFail($id);
        $user->loadRelationshipCounts();
        $followings = $user->followings()->paginate(10);
        
        return view('users.followings',[
            'user' => $user,
            'users' => $followings,
            ]);
        
    }
    
    public function followers($id){
        $user = User::findOrFail($id);
        $user->loadRelationshipCounts();
        $followers = $user->followers()->paginate(10);
        
        return view('users.followers',[
            'user' => $user,
            'users' => $followers,
            ]);
    }
    
    public function favorites($id)
    {
        $data = [];
        $user = User::findOrFail($id);
        $user->loadRelationshipCounts();
        //
        $favorites = $user->favorites()->paginate(10);
        
        $data = [
                'user' => $user,
                'favorites' => $favorites,
                ];
        
        return view('users.favorites', $data
        );
    }
    //
}
