@extends('layouts.main-form')

@section('title', 'Cadastre-se')

@section('conteudo')
<main class="container py-5 vh-100">
    <!--    *Register div start   -->
    <section class="align-items-center d-flex h-100 justify-content-center row">
        <form class="bg-form-orange col-11 col-lg-4 px-4 py-3 rounded-3" action="">
            <div class="w-75">
                <img alt="logo" class="w-25 " src="../img/footer-logo.png">
            </div>
            <div>
                <h1 class="fs-3 text-center">Login</h1>
            </div>
            
            <div class="mb-3">
                <label class="form-text" for="username-or-phone-number">Nome de usuário ou telefone</label>
                <input class="form-control" id="username-or-phone-number" required type="text">
            </div>
            <div class="mb-3">
                <label class="form-text" for="password">Senha</label>
                <input class="form-control" id="password" required type="password">
            </div>

            <section>
                <div class="d-flex flex-column justify-content-center">
                    <button class="btn btn-form mb-4 mt-3 text-white w-100" type="button">Entrar</button>
                    <a class="color-darkest-orange mb-4 text-center text-decoration-none" href="#">Esqueceu a palavra-passe?</a>
                    <hr class="bg-darkest-orange color-darkest-orange mb-4 mt-1">
                    <a class="btn btn-form-outline mb-3 mt-2 w-100" href="#">Página inicial</a>
                </div>
            </section>
        </form>
    </section>
</main>
@endsection