<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand pr-3" href="/">ウイスキーの品評会</a>
        
        <table class="row">
        <tr class="form-group mb-0">
        {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
        <td class="pr-2">
            {!! Form::label('keyword', 'ユーザー検索:',['class' => 'text-muted mr-auto mt-2']) !!}
        </td>
        <td>
            {!! Form::text('keyword' ,'', ['class' => 'form-control', 'placeholder' => 'ユーザー名'] ) !!}
        </td>
        <td>
        {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!} 
        </td>
        {!! Form::close() !!}
        </tr>
        </table>
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    {{-- ユーザー詳細 --}}
                    <li class="nav-item nav-link">{!! link_to_route('users.show', 'My profile', ['user' => Auth::id()], ['class'=>'text-muted']) !!}</li>
                    {{--ログアウト--}}
                    <li class="nav-item nav-link">{!! link_to_route('logout.get', 'Logout',[], ['class'=>'text-muted']) !!}</li>
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get', '登録する', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', 'ログインする', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
    </nav>
</header>
