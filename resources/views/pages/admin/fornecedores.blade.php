@extends('layouts.app')

@section('title', 'Fornecedores Admin')

@section('content')
<div class="container mt-4">
    <h1>Fornecedores</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fornecedores ?? [] as $fornecedor)
                <tr>
                    <th scope="row">{{ $fornecedor['id'] }}</th>
                    <td>{{ $fornecedor["nome"] ?? 'Fornecedor' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
