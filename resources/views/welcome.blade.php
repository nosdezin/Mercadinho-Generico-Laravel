@extends("layouts.bodybase")

@section("content-main")
    @if (!$produtos)
        <h1>Nenhum produto adicionado</h1>
    @endif
    <div class="line-product">
        @foreach ($produtos as $produto)
            <a href="{{ route('product.show', ['id' => $produto->id]) }}" class="product">
                <img src="{{ $produto->image_url }}">
                <span>{{ $produto->nome }}</span>
                <span>R${{ $produto->preco }}</span>
            </a>
        @endforeach
    </div>
@endsection