<h1>Keepinho</h1>
<p>Seja bem-vindo ao Keepinho, o seu assistente pessoal (melhor do que o Google)</p>
<hr>
<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <textarea name="texto" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">Gravar nota</button>
</form>
<hr>
@foreach ($notas as $nota)
    <div>
        {{ $nota->texto }}
        <br>
        <a href="{{ route('keep.editar', $nota->id) }}">Editar</a>
    </div>
@endforeach