@if (count($favorites) > 0)
<div class="row ml-2">
    <ul class="list-unstyled">
        @foreach ($favorites as $favorite)
        <li class="media">
                <div class="media-body mb-1">
                    <div class="row mb-2">
                        <div class="mb-1 text-muted col-4">銘柄：{!! link_to_route('whisky.show', $favorite->whisky_name,['whisky' => $favorite->id]) !!}</div>
                        <div class="mb-1 text-muted col-6">メーカー：{{$favorite->maker}}</div>
                        <div class="mb-1 text-muted col-4">度数：{{$favorite->percentage}}</div>
                        <div class="mb-1 text-muted col-4">口コミ平均点：</div>
                    </div>
                </div>
        </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $favorites->links() }}
@endif