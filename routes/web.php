<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepinhoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::delete('/apagar/{nota}', [KeepinhoController::class, 'apagar'])->name('keep.apagar');
Route::get('/lixeira', [KeepinhoController::class, 'lixeira'])->name('keep.lixeira');
Route::get('restaurar/{nota}', [KeepinhoController::class, 'restaurar'])->name('keep.restaurar');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('produtos', ProdutosController::class);

// Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');
// Route::post('/auth/save', [AuthController::class, 'save'])->name('auth.save');
// Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
// Route::post('/auth/login', [AuthController::class, 'login']);
// Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');
Route::post('/carrinho/adicionar', [CarrinhoController::class, 'adicionar'])->name('carrinho.adicionar');
Route::delete('/carrinho/remover/{id}', [CarrinhoController::class, 'remover'])->name('carrinho.remover');

Route::get('/categorias', [CategoriasController::class, 'index'])->name('categorias.index');
Route::post('/categorias/create', [CategoriasController::class, 'create'])->name('categorias.create');


require __DIR__.'/auth.php';