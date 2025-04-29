<h1>(●'◡'●) Keepinho</h1>
<p>Seja bem vindo ao Keepinho, sseu assistente pessoal (melhor que o google).</p>

<hr>
<form action="{{ route('keep.gravar') }}" method="post" style="display:flex; flex-direction: column; padding: 1rem; margin:1rem; width:500px; boder: 3px dotted #c49102; background-color:#FFEE8C">
@csrf
    <label for="texto" style="font-weight:bold; margin: 0.5rem;">Digite seu texto aqui!</label>
    <textarea style="margin: 0.5rem;" name="texto" id="texto" cols="30" rows="10"></textarea>
    <input style="margin: 0.5rem;" type="submit" value="Salvar Nota">

</form>
<hr>

@foreach ($notas as $nota)
    <div style="border: 3px dotted purple; padding: 1rem; diplay: flex; justify-content: center; width: max-content;max-width: 150px; background-color: #E6E6FA; color:purple; font-size: 20px; margin: 1rem;">
        {{ $nota->texto }}
    </div>
@endforeach