@if (count($reputations) > 0)
<div class="row ml-2">
    <ul class="list-unstyled">
        @foreach ($reputations as $reputation)
            <li class="media">
                
                <div class="media-body mb-1">
                    <div class="row mb-2">
                        {{-- 投稿内容 --}}
                        <div class="mb-1 text-muted col-3">銘柄：{!! link_to_route('whisky.show', $reputation->whisky->whisky_name,['whisky' => $reputation->whisky->id]) !!}</div>
                        <div class="mb-1 text-muted col-3">総合点：{{$reputation->total_score }}</div>
                        <div class="mb-1 text-muted col-3">飲み方：{{$reputation->way->way }}</div>
                        <div class="text-muted col-3">香り：{{$reputation->smell->smell}}</div>
                        <div class="text-muted col-3">色：{{$reputation->color->color}}</div>
                        <div class="text-muted col-3">味：{{$reputation->taste->taste}}</div>
                        <div class="text-muted col-3">余韻：{{$reputation->aftertaste->aftertaste}}</div>
                        <div class="mb-1 text-muted col-12">品評：{!! nl2br(e($reputation->comment)) !!}</div>
                        
                        <div class="col-3">
                            <table>
                            @if (Auth::id() == $reputation->user_id)
                                <tr>
                                    <td>{!!link_to_route('reputations.edit','編集', ['reputation' =>$reputation->id], ['class' => 'btn btn-success btn-sm']) !!}</td>
                            {{-- 投稿削除ボタンのフォーム --}}
                                    <td>
                                        {!! Form::open(['route' => ['reputations.destroy', $reputation->id], 'method' => 'delete']) !!}
                                        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            
                            @else
                           
                        @endif
                        </table>
                        </div>
                        
                        <div class="text-muted col-4">posted at： {{ $reputation->created_at->format('Y/m/d') }}</div>
                        <div class="text-muted col-4">post by： {!! link_to_route('users.show', $reputation->user->name, ['user' => $reputation->user->id]) !!}</div>
                        
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $reputations->links() }}
    </div>
@endif