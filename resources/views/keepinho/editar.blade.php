<h1>Keepinho</h1>
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
<form action="{{ route('keep.editarGravar') }} "method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $nota->id }}">
    <input type="text" name="titulo" value="{{ old('titulo', $nota->titulo) }}"><br>
    <textarea name="texto" cols="30" rows="10">{{ old('texto', $nota->texto) }}</textarea>
    <br>
    <button type="submit">Editar nota</button>
</form>