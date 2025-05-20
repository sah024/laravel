<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotaRequest;
use App\Models\Nota;
use Illuminate\Http\Request;

class KeepinhoController extends Controller
{
    public function index() {
        $notas = Nota::all();
        // dd($var) = var_dump() and die()
        return view('keepinho/index', [
            'notas' => $notas
        ]);
        //ou compact($var);
    }
    public function gravar(NotaRequest $request) {
        //php artisan lang:publish
        // composer require lucascudo/laravel-pt-br-localization --dev
        // php artisan vendor:publish --tag=laravel-pt-br-localization
        
        // a request já valida
        $dados = $request->validated();
        // create necessita de atributos para passar 
        Nota::create($dados);
        // acima, cria uma nota com todos os valores enviado pelo formulário.
        // Porém, a Model vai ficar apenas com aqueles listados no $fillable
        return redirect()->route('keep');
    }

    //tipagem, facilita pois já busca no Banco
    public function editar (Nota $nota, NotaRequest $request) {
        if($request->isMethod('put')) {
            $nota = Nota::find($request->id);
            
            //poupa de escrever tantos dados
            $nota->fill($request->all());

            $nota->save();
            return redirect()->route('keep');
        }
        return view('keepinho.editar', [
            'nota' => $nota
        ]);
    }

    public function apagar(Nota $nota) {
        $nota->delete();
        return redirect()->route('keep');
    }
}