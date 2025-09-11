<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Gestão Empresarial</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('produtos*') ? 'active' : '' }}" href="{{ url('/produtos') }}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('sobre') ? 'active' : '' }}" href="{{ url('/sobre') }}">Sobre</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('admin*') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ url('/admin/produtos') }}">Produtos</a></li>
                        <li><a class="dropdown-item" href="{{ url('/admin/fornecedores') }}">Fornecedores</a></li>
                        <li><a class="dropdown-item" href="{{ url('/admin/clientes') }}">Clientes</a></li>
                        <li><a class="dropdown-item" href="{{ url('/admin/login') }}">Logar</a></li>
                    </ul>
                </li>


                @if(!request()->is('admin*'))
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('cadastro') ? 'active' : '' }}" href="{{ url('/cadastro') }}">Cadastrar</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
