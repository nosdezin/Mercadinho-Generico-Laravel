<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mercado Genérico</title>

    @vite(['resources/css/app.css'])
</head>

<body>
    <header class="header">
        <a class="logo" href="{{ route('home') }}">MERCADO GENÉRICO</a>
        
        <nav>
            <a href="#" class="btn-primary">Inicio</a>
            <a href="#" class="btn-primary">Criar Produto</a>
            <a href="#" class="btn-primary">Listar Produtos</a>
        </nav>
    </header>
    <main class="main-admin-container">
        <a href="{{ route('product.create') }}" class="btn-primary">Criar Produto</a>

        <span>Produtos:</span>
        <table>
            <thead>
                <tr>
                    <td>NOME:</td>
                    <td>PREÇO:</td>
                    <td>ESTOQUE:</td>
                    <td>AÇÕES:</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->estoque }}</td>
                        <td>
                            <a href="#" class="btn-danger">Editar</a>
                            <a href="#" class="btn-delete">Apagar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- <ul class="list-product">
            <li>
                <span>NOME:</span>
                <span>PREÇO:</span>
                <span>ESTOQUE:</span>
                <span>
                    <a href="#" class="btn-danger">Editar</a>
                    <a href="#" class="btn-delete">Apagar</a>
                </span>
            </li>
        </ul> -->
    </main>
</body>

</html>