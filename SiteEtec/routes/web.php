<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

    Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/noticias', function () {
    return view('noticias');
})->name('noticias');

Route::get('/cursos', function () {
    return view('cursos');
})->name('cursos');