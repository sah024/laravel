<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class KeepinhoController extends Controller
{
    public function index() {
        $notas = Nota::all();
        return view('keepinho/index', [
            'notas'=> $notas,
        ]);
    }

    public function gravar(Request $request) {
        dd($request);
    }
}

//eloquent -> acesso banco
//rodar migration php artisan migrate
//migration:rollback -> ctrlZ