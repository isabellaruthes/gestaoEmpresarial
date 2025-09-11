<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
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

}
