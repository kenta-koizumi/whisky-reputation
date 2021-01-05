<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reputation;

class ReputationsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            $user->loadRelationshipCounts();
            // ユーザの投稿の一覧を作成日時の降順で取得
            $reputations = $user->feed_reputations()->orderBy('created_at', 'desc')->paginate(4);

            $data = [
                'user' => $user,
                'reputations' => $reputations,
            ];
        }

        // Welcomeビューでそれらを表示
        return view('welcome', $data);
    }
    
    public function create(){
        $reputaion = new Reputation;
        return view('reputations.create',[
            'reputation' => $reputaion,
            ]);
    }
    
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'comment' => 'required|max:100',
        ]);

        // 認証済みユーザ（閲覧者）の投稿として作成（リクエストされた値をもとに作成）
        $request->user()->reputations()->create([
            'whisky_id' => $request->whisky_id,
            'total_score' => $request->total_score,
            'way_id' => $request->way_id,
            'color_id' => $request->color_id,
            'smell_id' => $request->smell_id,
            'taste_id' => $request->taste_id,
            'aftertaste_id' => $request->aftertaste_id,
            'amount' => $request->amount,
            'comment' => $request->comment,
        ]);

        // 前のURLへリダイレクトさせる
        return redirect('/');
    }
    
    public function destroy($id){
        $reputation = \App\Reputation::findOrFail($id);
        
        if(\Auth::id() === $reputation->user_id){
            $reputation->delete();
        }
        
        return back();
    }
    
    public function edit($id){
        $reputation = \App\Reputation::findOrFail($id);
        
        return view('reputations.edit',[
            'reputation' => $reputation,
            ]);
    }
    
    public function update(Request $request, $id){
        $request->validate([
            'comment' => 'required|max:100',
        ]);
        $reputation = \App\Reputation::findOrFail($id);
        if (\Auth::id() === $reputation->user_id){
            $reputation->total_score = $request->total_score;
            $reputation->way_id = $request->way_id;
            $reputation->color_id = $request->color_id;
            $reputation->smell_id = $request->smell_id;
            $reputation->taste_id = $request->taste_id;
            $reputation->aftertaste_id = $request->aftertaste_id;
            $reputation->amount = $request->amount;
            $reputation->comment = $request->comment;
            $reputation->save();
        }
        return redirect ('/');
    }
}
