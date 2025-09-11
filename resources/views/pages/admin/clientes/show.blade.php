@extends('layouts.app')

@section('title', 'Detalhes do Cliente')

@section('content')
<div class="container mt-4">
    <h1>{{ $cliente["nome"] ?? 'Cliente' }}</h1>
    <p>Email: {{ $cliente["email"] ?? '-' }}</p>
    <p>Telefone: {{ $cliente["telefone"] ?? '-' }}</p>
</div>
@endsection
