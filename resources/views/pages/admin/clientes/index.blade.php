@extends('layouts.app')

@section('title', 'Clientes Admin')

@section('content')
<div class="container mt-4">
    <h1>Clientes</h1>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes ?? [] as $cliente)
                <tr>
                    <th scope="row">{{ $cliente['id'] }}</th>
                    <td>{{ $cliente["nome"] ?? 'Cliente' }}</td>
                    <td>
                        <a href="{{ url('/admin/clientes/' . $cliente["id"]) }}" class="btn btn-primary btn-sm">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
