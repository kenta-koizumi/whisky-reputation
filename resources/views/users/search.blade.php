@extends('layouts.app')

@section('content')
@if (count($users) > 0)
        <h1>{{count($users)}}名ヒットしました</h1>
        @foreach($users as $user)
        
        <div class="row p-2 border-bottom text-center">
            <img class="rounded" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt="ユーザー画像">
                <div class="text-muted col-sm-3">
                ユーザー名：{!! link_to_route('users.show', $user->name, ['user' => $user->id]) !!}
                </div>
                <div class="text-muted col-sm-3">
                    フォロー中：{{ $user->followings->count('id') }}
                </div>
                <div clas="text-muted col-sm-3">
                    フォロワー：{{ $user->followers->count('id') }}
                </div>
                <div class="text-muted col-sm-3">
                    投稿数：{{ $user->reputations->count('id') }}
                </div>
                <div class="text-muted offset-sm-4 col-sm-3">
                    お気に入り数：{{$user->favorites->count('id')}}
                </div>
                <div class="text-muted col-sm-3">
                登録日：{{$user->created_at->format('Y/m/d') }}
                </div>
                @include('users.follow_button')
        </div>
        @endforeach
        
        @else
        <h1 style="text-align:center;" class="pt-5">検索結果がありません</h1>
        @endif
@endsection