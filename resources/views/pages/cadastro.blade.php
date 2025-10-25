@extends('layouts.app')

@section('title', 'Cadastro de Produto')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Cadastro de Produto</h1>

    <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem do Produto</label>
            <input name="imagem" type="file" class="form-control" id="imagem" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Produto</label>
            <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite o nome do produto">
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" class="form-control" id="descricao" rows="3" placeholder="Digite uma breve descrição"></textarea>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço (R$)</label>
            <input name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="0.00">
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success btn-lg px-5 shadow-sm">
                <i class="bi bi-check-circle me-2"></i> Cadastrar
            </button>
        </div>
    </form>
</div>
@endsection
