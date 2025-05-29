<h1>Usuários</h1>
@if (Auth::user())
    Olá {{ Auth::user()->name }}.
    <a href="{{ route('auth.logout') }}">Sair</a>
@else
    Você não está autenticado.
    <a href="{{ route('auth.login') }}">Entrar</a>
@endif
<hr>
@if ($errors->any())
    <div style="color:red">
        <h3>Erro!</h3>
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>                   
                @endforeach
            </ul>
        </div>
@endif
<form action="{{ route('auth.save') }}" method="post">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Name:"> <br>
    <input type="email" name="email" value="{{ old('email') }}" placeholder="E-mail:"> <br>
    <input type="password" name="password" placeholder="Password:"> <br>
    <input type="password" name="password_confirmation" placeholder="Password Check:"> <br>
    <button type="submit">Save</button>
</form>
<hr>

<ul>
@foreach ($usuarios as $user)
    <li>{{ $user->name }}</li>
@endforeach
</ul>