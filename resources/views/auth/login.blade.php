<h1>Login</h1>
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
<form action="{{ route('auth.login') }}" method="post">
    @csrf
    <input type="email" name="email" value="{{ old('email') }}" placeholder="E-mail:"> <br>
    <input type="password" name="password" placeholder="Password:"> <br>
    <button type="submit">Save</button>
</form>