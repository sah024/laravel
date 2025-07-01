<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $produtos = Produto::all();
        return view('produtos.index', [
            'produtos' => $produtos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdutoRequest $request)
    {
        $dados = $request->validated();

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $caminhoImagem = $imagem->store('produtos', 'public');
        }

        Produto::create([
            'nome' => $dados['nome'],
            'preco' => $dados['preco'],
            'descricao' => $dados['descricao'],
            'imagem' => $caminhoImagem,
            'categoria_id' => $dados['categoria_id']
        ]);

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
