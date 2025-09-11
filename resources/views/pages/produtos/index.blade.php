@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
<div class="container mt-4">
    <h1>Produtos</h1>
    <div class="row">
        @foreach($produtos ?? [] as $produto)
            <div class="col-md-4">
                @include('components.card-produto', ['produto' => $produto])
            </div>
        @endforeach
    </div>
</div>
@endsection
