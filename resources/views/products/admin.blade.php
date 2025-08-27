@extends('layouts.adminbodybase')

@section('main')
    <main class="admin-container">
        <div class="search">
            <input type="text" name="search">
            <button class="btn-search">Pesquisar</button>
        </div>

        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID:</td>
                        <td>NOME:</td>
                        <td>PREÇO:</td>
                        <td>ESTOQUE:</td>
                        <td>AÇÕES:</td>
                        <td>IMAGEM:</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->preco }}</td>
                            <td>{{ $produto->estoque }}</td>
                            <td><a class="imgs" href="{{ $produto->image_url }}">Acessar Imagem</a></td>
                            <td>
                                <a href="{{ route('product.show', ['id' => $produto->id]) }}"
                                    class="btn-primary">Visualizar</a>
                                <a href="{{ route('product.edit',['id' => $produto->id]) }}" class="btn-danger">Editar</a>
                                <a href="#" class="btn-delete">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
