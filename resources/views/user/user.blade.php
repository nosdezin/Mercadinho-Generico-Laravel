@extends("layouts.bodybase")

@section("content-main")
<div class="login-container">
    <h1>Bem vindo, {{ $user->email }}</h1>
    <form action="{{ route('user.logout') }}">
        <button type="submit" class="btn-delete">Sair da conta</button>
    </form>
</div>
@endsection