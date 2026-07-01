<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $busca = $request->search;

        $itens = Item::when($busca, function ($query) use ($busca) {
            $query->where('nome', 'like', "%{$busca}%")
                  ->orWhere('codigo', 'like', "%{$busca}%")
                  ->orWhere('categoria', 'like', "%{$busca}%")
                  ->orWhere('marca', 'like', "%{$busca}%");
        })
        ->orderBy('nome')
        ->paginate(10)
        ->withQueryString();

        return view('itens', compact('itens'));
    }

    public function create()
    {
        return view('itens-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:items',
            'nome' => 'required',
            'categoria' => 'required',
            'marca' => 'required',
            'estoque' => 'required|integer|min:0',
            'preco' => 'required|numeric|min:0',
        ]);

        Item::create($request->all());

        return redirect()
            ->route('itens')
            ->with('success', 'Item cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view('itens-edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $request->validate([
            'codigo' => 'required|unique:items,codigo,' . $id,
            'nome' => 'required',
            'categoria' => 'required',
            'marca' => 'required',
            'estoque' => 'required|integer|min:0',
            'preco' => 'required|numeric|min:0',
        ]);

        $item->update($request->all());

        return redirect()
            ->route('itens')
            ->with('success', 'Item atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        $item->delete();

        return redirect()
            ->route('itens')
            ->with('success', 'Item removido com sucesso!');
    }
}