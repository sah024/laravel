<?php

use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepinhoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});

//em ordem, valor = $valor; 

//Cálculos
Route::get('/calc/somar/{x}/{y}', [CalculosController::class, 'somar']);
Route::get('/calc/subtrair/{x}/{y}', [CalculosController::class, 'subtrair']);
Route::get('/calc/multiplicar/{x}/{y}', [CalculosController::class, 'multiplicar']);
Route::get('/calc/dividir/{x}/{y}', [CalculosController::class, 'dividir']);
Route::get('/calc/quadrado/{x}', [CalculosController::class, 'quadrado']);

//Keepinho
Route::prefix('/keep')->group(function () {
    Route::get('/', [KeepinhoController::class, 'index'])->name('keep');
    Route::post('/gravar', [KeepinhoController::class, 'gravar'])->name('keep.gravar');
    // {} variável da rota
    Route::get('/editar/{nota}', [KeepinhoController::class, 'editar'])->name('keep.editar'); //Formulário
    // put pra editar efetivamente
    Route::put('/editar', [KeepinhoController::class, 'editar'])->name('keep.editarGravar'); //Ação
    // delete apaga
    Route::delete('/apagar/{nota}', [KeepinhoController::class, 'apagar'])->name('keep.apagar');
    Route::get('/lixeira', [KeepinhoController::class, 'lixeira'])->name('keep.lixeira');
    Route::get('restaurar/{nota}', [KeepinhoController::class, 'restaurar'])->name('keep.restaurar');
});