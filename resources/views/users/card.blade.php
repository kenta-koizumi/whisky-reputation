<div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $user->name }}</h3>
        </div>
        <div class="card-body">
            {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
            <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
        </div>
</div>
    @if (count($user->reputations)>0)
        <div>
            最終投稿日：{{$user->reputations()->first()->updated_at->format('Y/m/d')}}
        </div>
    @else
        <p>投稿がありません</p>
    @endif