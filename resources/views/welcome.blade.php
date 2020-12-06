@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-3">
                {{-- ユーザー情報--}}
                @include('users.info')
                {{-- 投稿ページへのリンク--}}
                    {!!link_to_route('reputations.create', '品評する', [], ['class' => 'btn btn-lg btn-primary btn-block']) !!}
            </aside>
            
            @include('reputations.reputations')
        </div>
        
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>ようこそ、ウイスキーの品評会へ</h1>
                <div class="mt-4">
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', '登録して品評する', [], ['class' => 'btn btn-lg btn-primary']) !!}
                </div>
                <div class="mt-4">
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('login', 'ログインする', [], ['class' => 'btn btn-lg btn-primary']) !!}
                </div>
            </div>
        </div>
    @endif
@endsection