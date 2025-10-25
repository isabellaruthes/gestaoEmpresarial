@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Produtos</h1>
        <a href="{{ url('/admin/produtos/create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle me-1"></i> Adicionar Produto
        </a>
    </div>

    <div class="row">
        @foreach($produtos ?? [] as $produto)
            <div class="col-md-4">
                @include('components.card-produto', ['produto' => $produto])
            </div>
        @endforeach
    </div>
</div>
@endsection