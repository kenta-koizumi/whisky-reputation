@if (count($reputations) > 0)
<div class="row col-9 ml-2">
    <ul class="list-unstyled">
        @foreach ($reputations as $reputation)
            <li class="media">
                {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <img class=" rounded mr-3" src="{{ Gravatar::get($reputation->user->email, ['size' => 50]) }}" alt="ユーザー画像">
                <div class="media-body mb-1">
                    <div class="row mb-2">
                        {{-- 投稿内容 --}}
                        <div class="mb-1 text-muted col-2">総合点：{{$reputation->total_score }}</div>
                        <div class="text-muted col-2">飲み方：{{$reputation->howtodrink_id}}</div>
                        <div class="text-muted col-2">香り：{{$reputation->smell->smell}}</div>
                        {{--2段目--}}
                        <div class="text-muted col-2">色：{{$reputation->color->color}}</div>
                        <div class="text-muted col-2">味：{{$reputation->taste->taste}}</div>
                        <div class="text-muted col-2">余韻：{{$reputation->aftertaste->aftertaste}}</div>
                        {{--3段目--}}
                        <div class="mb-1 text-muted col-12">品評：{!! nl2br(e($reputation->comment)) !!}</div>
                        {{--4段目--}}
                        <div class="col-2">
                            @if (Auth::id() == $reputation->user_id)
                            {!!link_to_route('reputations.edit','編集', ['reputation' =>$reputation->id], ['class' => 'btn btn-success btn-sm']) !!}
                        @endif
                        </div>
                        <div class="col-1">
                        @if (Auth::id() == $reputation->user_id)
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['reputations.destroy', $reputation->id], 'method' => 'delete']) !!}
                                {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                        </div>
                        <div class=" offset-3 text-muted col-4">posted at： {{ $reputation->created_at->format('Y/m/d') }}</div>
                        <div class="text-muted col-2">post by： {!! link_to_route('users.show', $reputation->user->name, ['user' => $reputation->user->id]) !!}</div>
                        
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $reputations->links() }}
    </div>
@endif