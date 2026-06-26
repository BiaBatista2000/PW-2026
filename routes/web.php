<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('Login');
});

Route::post('/', [LoginController::class, 'login']);

Route::get('/inicial', function () {
    return view('Inicial');
})->name('inicial');

Route::get('/notificacoes', function () {
    return view('Notificacoes');
})->name('notificacoes');

Route::get('/categorias', [CategoriaController::class, 'index'])
    ->name('categorias');

Route::get('/relatorios', function () {
    return view('Relatorios');
})->name('relatorios');

Route::get('/movimentacoes', function () {
    return view('Movimentacoes');
})->name('movimentacoes');

Route::get('/itens', [ItemController::class,'index'])->name('itens');

Route::get('/itens/create', [ItemController::class,'create'])
    ->name('itens.create');

Route::post('/itens', [ItemController::class,'store'])
    ->name('itens.store');

Route::get('/itens/{id}/edit', [ItemController::class,'edit'])
    ->name('itens.edit');

Route::put('/itens/{id}', [ItemController::class,'update'])
    ->name('itens.update');

Route::delete('/itens/{id}', [ItemController::class,'destroy'])
    ->name('itens.destroy');

Route::get('/clientes', function () {
    return view('Clientes');
})->name('clientes');

Route::get('/configuracoes', function () {
    return view('Configuracoes');
})->name('configuracoes');