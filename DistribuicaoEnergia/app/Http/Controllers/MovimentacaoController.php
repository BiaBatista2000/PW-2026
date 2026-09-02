<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimentacao;

class MovimentacaoController extends Controller
{
    public function index(Request $request)
    {
        $query = Movimentacao::query();

        if ($request->filled('tipo')) {
            $query->where('tipo', $request->tipo);
        }

        if ($request->filled('inicio')) {
            $query->whereDate('data', '>=', $request->inicio);
        }

        if ($request->filled('fim')) {
            $query->whereDate('data', '<=', $request->fim);
        }

        $movimentacoes = $query
            ->orderBy('data', 'desc')
            ->paginate(10)
            ->withQueryString();

        return view('Movimentacoes', compact('movimentacoes'));
    }
}