<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $usuario = $request->usuario;
        $senha = $request->senha;

        if ($usuario === 'beatriz' && $senha === '1234') {
            return redirect()->route('inicial');
        }

        return back()->with('erro', 'Usuário ou senha incorretos.');
    }
}