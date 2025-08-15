@extends("layouts.bodybase")

@section("content-main")
    <h1>Cadastro de produto</h1>
    <form action="{{ route('product.store') }}" method="POST" class="create-form">
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="price">Preço:</label>
            <input type="number" name="price">
        </div>
        <div>
            <label for="stoke">Estoque:</label>
            <input type="number" name="stoke">
        </div>
        <button type="submit" class="btn-confirm">Criar</button>
    </form>
@endsection