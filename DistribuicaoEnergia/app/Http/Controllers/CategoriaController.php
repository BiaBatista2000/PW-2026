<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('Categorias', compact('categorias'));
    }

    public function create()
    {
        return view('CriarCategoria');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'descricao' => 'required|max:255',
            'quantidade_itens' => 'required|integer|min:0'
        ]);

        Categoria::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'quantidade_itens' => $request->quantidade_itens
        ]);

        return redirect()->route('categorias')
                         ->with('success', 'Categoria cadastrada com sucesso!');
    }

    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);

        return view('EditarCategoria', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'descricao' => 'required|max:255',
            'quantidade_itens' => 'required|integer|min:0'
        ]);

        $categoria = Categoria::findOrFail($id);

        $categoria->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'quantidade_itens' => $request->quantidade_itens
        ]);

        return redirect()->route('categorias')
                         ->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);

        $categoria->delete();

        return redirect()->route('categorias')
                         ->with('success', 'Categoria excluída com sucesso!');
    }
}