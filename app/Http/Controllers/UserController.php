<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function login(): View {
        return view("pages.login");
    }

    public function cadastro(): View {
        return view("pages.cadastro");
    }

    public function sobre(): View {
        return view("pages.sobre");
    }

    public function store(Request $request): RedirectResponse {
        $validate = $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'cpf' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'cep' => 'required|string|max:255',
            'logradouro' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'uf' => 'required|string|max:255'
        ]);

        cliente::create($validate);

        return redirect('/');
    }

}