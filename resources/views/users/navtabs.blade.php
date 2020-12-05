<ul class="nav nav-tabs nav-justified mb-3">
    {{-- 投稿一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('reputations.reputations') }}" class="nav-link {{ Request::routeIs('reputations.reputations') ? 'active' : '' }}">
            TimeLine
            //<span class="badge badge-secondary">{{ $user->reputations_count }}</span>
        </a>
    </li>
    {{-- お気に入り一覧タブ 
    <li class="nav-item">
        <a href="{{ route('users.followings', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.followings') ? 'active' : '' }}">
            Followings
            <span class="badge badge-secondary">{{ $user->followings_count }}</span>
        </a>
    </li>--}}
</ul>