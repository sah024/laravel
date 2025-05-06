<h1>Keepinho</h1>
<form action="{{ route('keep.editarGravar') }} "method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $nota->id }}">
    <textarea name="texto" cols="30" rows="10">{{ $nota->texto }}</textarea>
    <br>
    <button type="submit">Editar nota</button>
</form>