<?php

use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    return 'Acesso permitido';
})->middleware('maioridade');
