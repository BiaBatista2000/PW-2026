<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\ClienteController;



Route::get('/', function () {
    return view('Login');
});

Route::post('/', [LoginController::class, 'login']);

Route::view('/inicial', 'Inicial')->name('inicial');

Route::view('/notificacoes', 'Notificacoes')
    ->name('notificacoes');

Route::get('/categorias', [CategoriaController::class, 'index'])
    ->name('categorias');

Route::get('/categorias/create', [CategoriaController::class, 'create'])
    ->name('categorias.create');

Route::post('/categorias', [CategoriaController::class, 'store'])
    ->name('categorias.store');

Route::get('/categorias/{id}/edit', [CategoriaController::class, 'edit'])
    ->name('categorias.edit');

Route::put('/categorias/{id}', [CategoriaController::class, 'update'])
    ->name('categorias.update');

Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])
    ->name('categorias.destroy');

Route::get('/itens', [ItemController::class, 'index'])
    ->name('itens');

Route::get('/itens/create', [ItemController::class, 'create'])
    ->name('itens.create');

Route::post('/itens', [ItemController::class, 'store'])
    ->name('itens.store');

Route::get('/itens/{id}/edit', [ItemController::class, 'edit'])
    ->name('itens.edit');

Route::put('/itens/{id}', [ItemController::class, 'update'])
    ->name('itens.update');

Route::delete('/itens/{id}', [ItemController::class, 'destroy'])
    ->name('itens.destroy');

Route::view('/relatorios', 'Relatorios')
    ->name('relatorios');

Route::view('/clientes', 'Clientes')
    ->name('clientes');

Route::view('/configuracoes', 'Configuracoes')
    ->name('configuracoes');

    Route::get('/relatorios', [RelatorioController::class, 'index'])->name('relatorios');
Route::get('/relatorios/pdf', [RelatorioController::class, 'pdf'])->name('relatorios.pdf');

Route::get('/movimentacoes', [MovimentacaoController::class, 'index'])
    ->name('movimentacoes');

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes');

Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');

Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');