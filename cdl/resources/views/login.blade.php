@extends('layout.login')

@section('login')
    
<form class="form-signin" method="POST">
    <div class="text-center" id="logo">
        <h2 class="form-signin-heading">OM's</h2>
        <hr>
    </div>
    <div class="mb-3">
    <input type="text" class="form-control form-control" name="login" placeholder="E-mail" required="" autofocus="" />
    </div>
    <div class="mb-3">
    <input type="password" class="form-control form-control" name="password" placeholder="Senha" required="" />
    </div>
    <div class="text-left">
        <a class="nav-link" href="#">Esqueci minha senha</a>
    </div>

    <div class="d-grid gap-2">
    <input type="submit" class="btn btn-lg" name="loginentrar" value="Entrar">
    </div>

</form>

@endsection