@if (count($favorites) > 0)
    <ul class="list-unstyled">
        @foreach ($favorites as $favorite)
        <p>{{$favorite->whisky_name}}</p>
        <p>{{$favorite->maker}}</p>
        <p>{{$favorite->percentage}}</p>    
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $favorites->links() }}
@endif