@extends('layouts.adminbodybase')

@section('main')
    <h1>Modificar produto</h1>
    <form action="{{ route('product.store') }}" method="post" class="create-form">
        @csrf

        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="price">Preço:</label>
            <input type="number" name="price" id="price" value="{{ old('price') }}">
        </div>
        <div>
            <label for="stoke">Estoque:</label>
            <input type="number" name="stoke" id="stoke" value="{{ old(key: 'stoke') }}">
        </div>
        <button type="submit" class="btn-confirm">Criar</button>
    </form>
@endsection