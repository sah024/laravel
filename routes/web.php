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

Route::get('/teste/{valor}', function ($valor) {
    return "Você digitou: {$valor}";
});

Route::get('/soma/{valor1}/{valor2}', function ($valor1, $valor2) {
    $soma = $valor1 + $valor2;
    return "O resultado da soma de {$valor1} com {$valor2} é: {$soma}";
});

//Cálculos

Route::get('/somar/{x}/{y}', [CalculosController::class, 'somar']);
Route::get('/subtrair/{x}/{y}', [CalculosController::class,'subtrair']);
Route::get('/quadrado/{x}', [CalculosController::class,'quadrado']);

//Keepinho
Route::prefix('/keep')->group(function () {
    Route::get('/', [KeepinhoController::class,'index']);
});