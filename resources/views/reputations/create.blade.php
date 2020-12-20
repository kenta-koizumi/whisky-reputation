@extends('layouts.app')

@section('content')

{!! Form::open(['route' => 'reputations.store']) !!}
        <div class="form-group mb-0">
        {!! Form::label('whisky_id', '銘柄:') !!}
        {!! Form::select('whisky_id', ['1'=>'山崎', '2'=> '白州', '3'=> '響', '4'=> 'ローヤル', '5'=> 'スペシャルリザーブ', '6'=> 'オールド', '7'=> '角瓶', '8'=> 'ホワイト', '9'=> 'トリス', '10'=> 'レッド', '11'=> '知多']) !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('total_score', '総合点:') !!}
        {!! Form::input('total_score', 'total_score') !!}
        </div>
       <div class="form-group mb-0">
        {!! Form::label('way_id', '飲み方:') !!}
        {!! Form::select('way_id', ['1'=>'ストレート', '2'=> 'ロック', '3' =>'水割り', '4' =>'お湯割り', '5' =>'ハイボール']) !!}
        </div> 
        <div class="form-group mb-0">
        {!! Form::label('color_id', '色:') !!}
        {!! Form::select('color_id', ['1'=>'琥珀色', '2'=> '赤褐色', '3'=> '黄金色', '4'=> 'その他']) !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('smell_id', '香り:') !!}
        {!! Form::select('smell_id', ['1'=>'ピーティー', '2'=> 'ヨード', '3'=> 'スモーキー', '4'=> 'フルーティ', '5'=> 'モルティ', '6'=> 'ウッディー', '7'=> 'ナッティー', '8'=> 'トフィー', '9'=> 'その他']) !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('taste_id', '味:') !!}
        {!! Form::select('taste_id', ['1'=>'リッチ', '2'=> 'マイルド', '3'=> '甘味', '4'=> '苦味', '5'=> '酸味', '6'=> '塩味', '7'=> 'その他']) !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('aftertaste_id', '余韻:') !!}
        {!! Form::select('aftertaste_id', ['1'=>'短い', '2'=> 'やや短い', '5'=> '中程度', '3'=> 'やや長い', '4'=> '長い']) !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('amount', '量:') !!}
        {!! Form::input('amount', 'amount') !!}
        </div>
        <div class="form-group mb-0">
        {!! Form::label('comment', '品評(100文字以内):') !!}
        {!! Form::textarea('comment', old('comment'), ['class' => 'form-control', 'rows' => '2']) !!}
        </div>
        {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block']) !!}
{!! Form::close() !!}

@endsection