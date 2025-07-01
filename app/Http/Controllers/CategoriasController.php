<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;


class CategoriasController extends Controller
{
    public function index()
    {   
        $categorias = Categoria::all();
        return view('categorias.index', [
            'categorias' => $categorias
        ]);
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validated();

        Categoria::create([
            'nome' => $dados['nome'],
            'descricao' => $dados['descricao']
        ]);

        return redirect()->route('categorias.index');
    }
}
