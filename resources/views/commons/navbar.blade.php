<header class="mb-2">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand pr-3" href="/">ウイスキーの品評会</a>
        
        @if (Auth::check())
        <table class="row">
        <tr class="form-group mb-0">
        {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
        <td class="pl-5 pr-2">
            {!! Form::label('keyword', 'ユーザー検索:',['class' => 'text-muted mr-auto mt-2']) !!}
        </td>
        <td>
            {!! Form::text('keyword' ,'', ['class' => 'form-control', 'placeholder' => 'ユーザー名'] ) !!}
        </td>
        <td>
        {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!} 
        </td>
        <td>
        {!! Form::close() !!}
        </td>
        <td>
        {!! Form::open(['route' => 'whisky.search', 'method' => 'get']) !!}
        </td>
        <td class="pl-5 pr-2">
            {!! Form::label('keyword', '銘柄検索:',['class' => 'text-muted mr-auto mt-2']) !!}
        </td>
        <td>
            {!! Form::text('keyword' ,'', ['class' => 'form-control', 'placeholder' => '銘柄名'] ) !!}
        </td>
        <td>
        {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!} 
        </td>
        {!! Form::close() !!}
        </tr>
        </table>
        @endif
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    {{-- ユーザー詳細 --}}
                    <li class="nav-item nav-link">{!! link_to_route('users.show', 'プロフィール', ['user' => Auth::id()], ['class'=>'text-muted']) !!}</li>
                    {{--ログアウト--}}
                    <li class="nav-item nav-link">{!! link_to_route('logout.get', 'ログアウト',[], ['class'=>'text-muted']) !!}</li>
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get', '登録する', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', 'ログインする', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
    </nav>
</header>
