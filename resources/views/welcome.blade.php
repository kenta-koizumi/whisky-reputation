@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                <div class="card container">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                    </div>
                    <div class="card-body">
                        {{-- 認証済みユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                        <img class="rounded img-fluid" src="{{ Gravatar::get(Auth::user()->email, ['size' => 500]) }}" alt="user image">
                    </div>
                </div>
                <div>
                    {!!link_to_route('reputations.create', '品評する', [], ['class' => 'btn btn-lg btn-primary btn-block']) !!}
                </div>
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