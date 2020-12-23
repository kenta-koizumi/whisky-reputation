    {{--追加--}}
    @if (Auth::user()->is_favorite($whisky->id))
        {{-- お気に入り解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $whisky->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入り解除', ['class' => "btn btn-danger"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入りボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $whisky->id]]) !!}
            {!! Form::submit('お気に入り', ['class' => "btn btn-primary"]) !!}
        {!! Form::close() !!}
    @endif