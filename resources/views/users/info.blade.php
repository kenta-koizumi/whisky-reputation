<div class="card container">
    <div class="card-header">
        <h3 class="card-title">{{ Auth::user()->name }}</h3>
    </div>
    <div class="card-body">
        {{-- 認証済みユーザのメールアドレスをもとにGravatarを取得して表示 --}}
        <img class="rounded img-fluid" src="{{ Gravatar::get(Auth::user()->email, ['size' => 500]) }}" alt="user image">
    </div>
</div>
<div class="card mt-2 mb-2">
    
   @if (count($user->reputations)>0)
        <div>
            最終投稿日：{{$user->reputations()->first()->updated_at->format('Y/m/d')}}
        </div>
    @else
        <p>投稿がありません</p>
    @endif
</div>