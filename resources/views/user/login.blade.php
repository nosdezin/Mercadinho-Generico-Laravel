@extends("layouts.bodybase")

@section("content-main")
    <div class="login-container">
        <form class="form-account" action="{{ route('user.register') }}" method="post">
            @csrf
            <h1>Cadastrar</h1>
            <div>
                <label for="email">E-mail:</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="password">Senha:</label>
                <input type="password" name="password">
            </div>
            <button type="submit" class="m-2 btn-primary">Acessar</button>
        </form>

        <form class="form-account" action="{{ route('user.acess') }}" method="post">
            @csrf
            <h1>Login</h1>
            <div>
                <label for="email">E-mail:</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="password">Senha:</label>
                <input type="password" name="password">
            </div>
            <button type="submit" class="m-2 btn-primary">Acessar</button>
        </form>
    </div>
@endsection