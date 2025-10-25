<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\produto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{

    protected array $produtos = [
        ['id' => 1, 'nome' => "produto 1", 'descricao' => 'descricao produto 1', 'preco' => 100.00],
        ['id' => 2, 'nome' => "produto 2", 'descricao' => 'descricao produto 2', 'preco' => 100.00],
        ['id' => 3, 'nome' => "produto 1", 'descricao' => 'descricao produto 1', 'preco' => 100.00],
        ['id' => 4, 'nome' => "produto 1", 'descricao' => 'descricao produto 1', 'preco' => 100.00],
    ];

    public function index(): View
    {
        $produtosList = produto::all();
        return view("pages.produtos.index", ['produtos' => $produtosList]);
    }

    public function show(int $id): View
    {
        return view("pages.produtos.show", compact('produto'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:540000'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $fileNameToStore = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)
                . '_' . time() . '.' . $file->getClientOriginalExtension();

            Storage::disk('produtos_images')->putFileAs('', $file, $fileNameToStore);

            $validated['imagem'] = Storage::disk('produtos_images')->url($fileNameToStore);
        }

        produto::create($validated);

        return redirect("/admin/produtos")
            ->with('success', 'Produto adicionado com sucesso!');
    }

    public function create(): View
    {
        return view("pages.produtos.create");
    }
}