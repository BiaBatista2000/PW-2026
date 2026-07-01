<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Carbon\Carbon;

class RelatorioController extends Controller
{
    public function index(Request $request)
    {
        $periodo = $request->periodo ?? 'mes';

        $query = Item::query();

        if ($periodo == 'mes') {
            $query->whereMonth('created_at', Carbon::now()->month);
        }

        if ($periodo == 'trimestre') {
            $query->whereBetween('created_at', [
                Carbon::now()->subMonths(3),
                Carbon::now()
            ]);
        }

        if ($periodo == 'semestre') {
            $query->whereBetween('created_at', [
                Carbon::now()->subMonths(6),
                Carbon::now()
            ]);
        }

        $itens = $query->get();

        return view('Relatorios', compact('itens', 'periodo'));
    }

    public function pdf(Request $request)
    {
        $periodo = $request->periodo ?? 'mes';

        $query = Item::query();

        if ($periodo == 'mes') {
            $query->whereMonth('created_at', Carbon::now()->month);
        }

        if ($periodo == 'trimestre') {
            $query->whereBetween('created_at', [
                Carbon::now()->subMonths(3),
                Carbon::now()
            ]);
        }

        if ($periodo == 'semestre') {
            $query->whereBetween('created_at', [
                Carbon::now()->subMonths(6),
                Carbon::now()
            ]);
        }

        $itens = $query->get();

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('relatorios.pdf', compact('itens', 'periodo'));

        return $pdf->download('relatorio.pdf');
    }
}