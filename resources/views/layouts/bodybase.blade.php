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
        <form action="" class="search">
            <input type="text" name="search" placeholder="Procure seu produto">
            <button><img src="https://icons.veryicon.com/png/o/internet--web/iview-3-x-icons/ios-search.png"></button>
        </form>
        <nav>
            <a href="{{ route('product.admin') }}" class="btn-confirm">Painel Admin</a>
            @if (session('login'))
                <a href="{{ route('user.account', ['id' => session('login')]) }}" class="btn-primary">Conta</a>
            @else
                <a href="{{ route('user.loginform') }}" class="btn-primary">Entrar</a>
            @endif
        </nav>
    </header>
    <main class="main">
        @yield('content-main')
    </main>
    <footer class="footer-container">
        <div class="footer-column">
            <h1>Mapa do Mercado</h1>
            <a href="{{ route('home') }}">inicio</a>
            <a href="#">Camisas</a>
            <a href="#">Eletrônicos</a>
            <a href="#">Cosméticos</a>
        </div>
        <div class="footer-column">
            <h1>Quer ajuda?</h1>
            <a href="#">FAQ</a>
            <a href="#">E-mail</a>
            <a href="#">Fale Conosco</a>
            <a href="#">Ajuda automática</a>
        </div>
        <div class="footer-column">
            <h1 class="text-4xl">Siga nós</h1>
            <div class="social-midia">
                <a href="#">
                    <img src="https://icons.veryicon.com/png/o/miscellaneous/offerino-icons/instagram-53.png">
                </a>
                <a href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/2175/2175193.png">
                </a>
                <a href="#">
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj6oJbQH2FzRWBgRjgOYQd2dTAFZE5GgSoYA&s">
                </a>
            </div>
        </div>
    </footer>
</body>

</html>