@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            
            <p>銘柄名：{{$whisky->whisky_name}}</p>
            <p>口コミ数：{{$whisky->reputations_count}}</p>
            <p>メーカー名：{{$whisky->maker}}</p>
            <p>度数：{{$whisky->percentage}}</p>
            @include('users.favorite_button')
        </aside>
        <div class="col-sm-8">
            
        </div>
    </div>
@endsection