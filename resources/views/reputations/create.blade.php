@extends('layouts.app')

@section('content')

{!! Form::open(['route' => 'reputations.store']) !!}
    <div class="form-group mb-0">
        {!! Form::label('total_score', '銘柄:') !!}
        {!! Form::select('whisky_id', ['1'=>'シングルモルトウイスキー山崎', '2'=> 'サントリー シングルモルト 白州']) !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('total_score', '総合点:') !!}
        {!! Form::select('total_score', ['1'=>'まずい','2' => '最高']) !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('total_score', '飲み方:') !!}
        {!! Form::select('howtodrink_id', ['1'=>'ロック', '2'=> 'ストレート', '3' =>'水割り', '4' => 'お湯割り', '5'=>'ハイボール', '6'=>'その他']) !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('total_score', '色:') !!}
        {!! Form::select('color_id', ['1'=>'金色', '2'=> '赤色']) !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('total_score', '香り:') !!}
        {!! Form::select('smell_id', ['1'=>'スモーキー', '2'=> 'オイリー']) !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('total_score', '味:') !!}
        {!! Form::select('taste_id', ['1'=>'甘い', '2'=> '苦い']) !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('total_score', '余韻:') !!}
        {!! Form::select('aftertaste_id', ['1'=>'長い', '2'=> 'やや長い']) !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('total_score', '量:') !!}
        {!! Form::input('amount', 'amount') !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('total_score', '品評(100文字以内):') !!}
        {!! Form::textarea('comment', old('comment'), ['class' => 'form-control', 'rows' => '2']) !!}
        </div>
        {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block']) !!}
{!! Form::close() !!}

@endsection