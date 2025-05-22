<h1>Keepinho</h1>
<h2>🗑️ Lixeira</h2>
<hr>

@if (session('sucesso'))
    <div style="background-color:darkseagreen;border:1px solid green; margin-bottom:5px;padding:3px;font-size: 25px;font-weight:bold;color:white;">
        {{ session('sucesso') }}
    </div>
@endif

<ul>
    @foreach ($notas as $nota)
        <div>
            <b>{{ $nota->titulo }}</b><br>
            {{ $nota->texto }}<br>
            <a href="{{ route('keep.restaurar', $nota->id) }}">♻️ Restaurar</a>
        </div>
        <br>
    @endforeach
</ul>
<hr>
<a href="{{ route('keep') }}">Voltar para o início</a>