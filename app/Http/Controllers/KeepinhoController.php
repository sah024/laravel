<?php

namespace App\Http\Controllers;

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
    public function gravar(Request $request) {
        // create necessita de atributos para passar 
        Nota::create($request->all());
        // acima, cria uma nota com todos os valores enviado pelo formulário.
        // Porém, a Model vai ficar apenas com aqueles listados no $fillable
        return redirect()->route('keep');
    }

    //tipagem, facilita pois já busca no Banco pra nós
    public function editar (Nota $nota, Request $request) {
        if($request->isMethod('put')) {
            $nota = Nota::find($request->id);
            $nota->texto = $request->texto;
            $nota->save();
            return redirect()->route('keep');
        }
        return view('keepinho.editar', [
            'nota' => $nota
        ]);
    }
}