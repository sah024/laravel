<h1>Keepinho</h1>
<p>Seja bem-vindo ao Keepinho, o seu assistente pessoal (melhor do que o Google)</p>
<hr>
<a href="{{route('keep.lixeira')}}">Lixeira</a>
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
<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <br>
    <input type="text" name="titulo" placeholder="Título da nota" value="{{ old('titulo') }}">
    <br>
    <textarea name="texto" cols="30" rows="10" placeholder="Digite sua nota aqui...">{{ old('texto') }}</textarea>
    <br>
    <button type="submit">Gravar nota</button>
</form>
<hr>
@foreach ($notas as $nota)
    <div>
        <b>{{ $nota->titulo }}</b><br>
        {{ $nota->texto }}
        <br>
        <a href="{{ route('keep.editar', $nota->id) }}">Editar</a>
        <br>
        <form action="{{ route('keep.apagar', $nota->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Apagar</button>
        </form>
    </div>
@endforeach