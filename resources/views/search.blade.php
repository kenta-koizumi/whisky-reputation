@extends('layouts.app')

@section('content')
        @foreach($data as $user)
        <img class=" rounded mr-3" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt="ユーザー画像">
        <div class="row py-2 border-bottom text-center">
                <div class="col-sm-3">
                ユーザー名：{!! link_to_route('users.show', $user->name, ['user' => $user->id]) !!}
                </div>
                <div class="col-sm-3">
                    フォロー中：
                </div>
                <div clas="col-sm-3">
                    フォロワー：
                </div>
                <div class="col-sm-3">
                    投稿数：
                </div>
                <div class="offset-sm-4 col-sm-3">
                    お気に入り数：
                </div>
                <div class="col-sm-3">
                登録日：{{$user->created_at->format('Y/m/d') }}
                </div>
                @include('users.follow_button')
        </div>
        @endforeach
@endsection