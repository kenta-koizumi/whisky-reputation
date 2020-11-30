@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>ようこそ、ウイスキーの品評会へ</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', '登録して品評する', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection