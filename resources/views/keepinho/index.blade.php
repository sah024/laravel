<h1>Keepinho</h1>
<p>Seja bem-vindo ao Keepinho, o seu assistente pessoal (melhor do que o Google)</p>
<hr>
@if ($errors->any())
    <div>
        <h3>Erro!</h3>
    </div>
@endif
@enderror
<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <br>
    <input type="text" name="titulo">
    <br>
    <textarea name="texto" cols="30" rows="10"></textarea>
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