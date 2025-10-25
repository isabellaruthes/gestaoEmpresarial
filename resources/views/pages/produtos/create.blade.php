@extends('layouts.app')

@section('title', 'Criar Produto')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-success text-white text-center py-3 rounded-top-4">
                    <h3 class="mb-0"><i class="bi bi-box-seam me-2"></i>Cadastro de Produto</h3>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4 text-center">
                            <label for="imagem" class="form-label fw-bold">Imagem do Produto</label>
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="file" id="imagem" name="file" accept="image/*" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="nome" class="form-label fw-bold">Nome do Produto</label>
                            <input type="text" class="form-control form-control-lg" id="nome" name="nome" required>
                        </div>

                        <div class="mb-4">
                            <label for="descricao" class="form-label fw-bold">Descrição</label>
                            <textarea class="form-control form-control-lg" id="descricao" name="descricao" rows="4" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="preco" class="form-label fw-bold">Preço (R$)</label>
                            <input type="number" step="0.01" class="form-control form-control-lg" id="preco" name="preco" required>
                        </div>

                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-success btn-lg px-5 shadow-sm">
                                <i class="bi bi-check-circle me-2"></i> Cadastrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection