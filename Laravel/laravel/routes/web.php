<?php

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect('/home');
    }

    return back()->with('error', 'Invalid credentials');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', function (Request $request) {

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    Auth::login($user);

    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/artist', function () {
    return view('artist');
})->name('artist')->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
});