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
            <a href="{{ route('home') }}" class="btn-primary">Inicio</a>
            <a href="{{ route('product.create') }}" class="btn-primary">Criar Produto</a>
            <!-- <a href="#" class="btn-primary">Listar Produtos</a> -->
        </nav>
    </header>
   @yield('main')
</body>

</html>