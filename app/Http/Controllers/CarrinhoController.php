<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function index() {
        $carrinho = session()->get('carrinho', []);
        return view('carrinho.index', compact('carrinho'));
    }

    public function adicionar(Request $request)
    {
        $id = $request->input('id');
        $dados = Produto::find($id);
        if(!empty($dados)){
            session()->put('carrinho.'.$id, $dados);
        }

        return redirect()->route('produtos.index');
    }
    public function remover(string $id) {
        session()->forget('carrinho.'.$id);
        return redirect()->route('produtos.index');
    }
}
