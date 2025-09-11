<div class="card mb-3 shadow-sm">
    <div class="card-body">
        <h5 class="card-title">{{ $produto["nome"] ?? 'Produto' }}</h5>
        <p class="card-text">{{ $produto["descricao"] ?? 'Descrição do produto aqui.' }}</p>
        <p class="card-text"><strong>Preço:</strong> R$ {{ $produto["preco"] ?? '0,00' }}</p>
        <a href="{{ url((request()->is('admin*') ? '/admin/produtos/' : '/produtos/') . ($produto['id'] ?? '#')) }}" class="btn btn-primary">Ver Detalhes</a>
    </div>
</div>
