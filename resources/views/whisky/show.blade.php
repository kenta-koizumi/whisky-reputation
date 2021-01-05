@extends('layouts.app')

@section('content')
<div class="row">
        <aside class="col-sm-4">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $whisky->whisky_name }}</h3>
        </div>
        <div class="card-body">
            {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
            <img class="rounded img-fluid" src="{{ $whisky->whisky_image }}" alt="ウイスキー画像">
        </div>
        <div class="row">
            <div class="mb-1 text-muted col-6">銘柄名：{{$whisky->whisky_name}}</div>
            <div class="mb-1 text-muted col-6">口コミ数：{{$whisky->reputations_count}}</div>
            <div class="mb-1 text-muted col-6">度数：{{$whisky->percentage}}</div>
            <div class="mb-1 text-muted col-6">平均点：{{$whisky->reputations()->average('total_score')}}</div>
            <div class="mb-1 text-muted col-12">メーカー名：{{$whisky->maker}}</div>
        </div>
</div>
<div class="mt-2">
@include('users.favorite_button')
</div>
</aside>
<div class="col-sm-8">
    
    @foreach($reputations as $reputation)
    <li class="media">
                
                <div class="media-body mb-1">
                    <div class="row mb-2">
    
    <div class="mb-1 text-muted col-3">総合点：{{$reputation->total_score }}</div>
    <div class="mb-1 text-muted col-3">飲み方：{{$reputation->way->way }}</div>
    <div class="text-muted col-3">香り：{{$reputation->smell->smell}}</div>
    <div class="text-muted col-3">色：{{$reputation->color->color}}</div>
    <div class="text-muted col-3">味：{{$reputation->taste->taste}}</div>
    <div class="text-muted col-3">余韻：{{$reputation->aftertaste->aftertaste}}</div>
    <div class="mb-1 text-muted col-12">品評：{!! nl2br(e($reputation->comment)) !!}</div>
    <div class="text-muted col-4">posted at： {{ $reputation->created_at->format('Y/m/d') }}</div>
                        <div class="text-muted col-4">post by： {!! link_to_route('users.show', $reputation->user->name, ['user' => $reputation->user->id]) !!}</div>
                        
    </div>
    </div>
    </li>
    @endforeach
</div>
</div>
@endsection