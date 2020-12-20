@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card')
            @if(Auth::id() == $user->id)
            {!!link_to_route('reputations.create', '品評する', [], ['class' => 'btn btn-lg btn-primary btn-block']) !!}
            @else
            @include('users.follow_button')
            @endif
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            @include('reputations.reputations')
        </div>
    </div>
@endsection