<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $clientes = Cliente::query();

        if ($request->search) {
            $clientes->where('nome', 'like', '%' . $request->search . '%');
        }

        return view('Clientes', [
            'clientes' => $clientes->get()
        ]);
    }

    public function store(Request $request)
    {
        Cliente::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'cidade' => $request->cidade,
        ]);

        return redirect()->route('clientes');
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'cidade' => $request->cidade,
        ]);

        return redirect()->route('clientes');
    }

    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();

        return redirect()->route('clientes');
    }
}