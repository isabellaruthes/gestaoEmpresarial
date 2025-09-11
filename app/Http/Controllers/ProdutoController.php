<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class ProdutoController extends Controller
{

    protected array $produtos = [
        ['id' => 1, 'nome' => "produto 1", 'descricao' => 'descricao produto 1', 'preco' => 100.00],
        ['id' => 2, 'nome' => "produto 2", 'descricao' => 'descricao produto 2', 'preco' => 100.00],
        ['id' => 3, 'nome' => "produto 1", 'descricao' => 'descricao produto 1', 'preco' => 100.00],
        ['id' => 4, 'nome' => "produto 1", 'descricao' => 'descricao produto 1', 'preco' => 100.00],
    ];

    public function index(): View {
        return view("pages.produtos.index", ['produtos' => $this->produtos]);
    }

    public function show(int $id): View {
        $produto = collect($this->produtos)->firstWhere('id', $id);

        return view("pages.produtos.show", compact('produto'));
    }
}
