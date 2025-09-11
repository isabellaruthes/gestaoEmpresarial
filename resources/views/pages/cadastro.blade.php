
@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
<div class="container mt-4">
    <h1>Cadastro</h1>
    <form>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha">
        </div>
        <x-botao text="Cadastrar" class="btn-success" type="submit"/>
    </form>
</div>
@endsection
