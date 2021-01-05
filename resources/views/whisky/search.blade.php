@extends('layouts.app')

@section('content')
@if (count($whiskies) > 0)
        <h1>{{count($whiskies)}}銘柄ヒットしました</h1>
        @foreach($whiskies as $whisky)
        
        <div class="row p-2 border-bottom text-center">
                <img class="rounded" src="{{ $whisky->whisky_image }}" alt="ウイスキー画像">
                <div class="text-muted col-sm-4">銘柄名：{!! link_to_route('whisky.show', $whisky->whisky_name, ['whisky' => $whisky->id]) !!}</div>
                <div class="text-muted col-sm-3">口コミ数：{{$whisky->reputations->count('id')}}</div>
                <div class="text-muted col-sm-3">度数：{{$whisky->percentage}}</div>
                <div class="text-muted col-sm-4">平均点：{{$whisky->reputations->average('total_score')}}</div>
                <div class="text-muted col-sm-4">メーカー名：{{$whisky->maker}}</div>
                @include('users.favorite_button')
        </div>
        @endforeach
        
        @else
        <h1 style="text-align:center;" class="pt-5">検索結果がありません</h1>
        @endif
@endsection