@extends('layouts.main-form')

@section('title', 'Redefinir senha')

@section('conteudo')
<main class="container py-5 vh-100">
    <!--    *Register div start   -->
    <section class="align-items-center d-flex justify-content-center h-100">
        <form class="bg-form-orange px-4 py-4 rounded-3 w-75" action="">
            <div class="mb-4 w-50">
                <img alt="logo" class="w-25 " src="../img/footer-logo.png">
            </div>
            <div class="mb-4">
                <h1 class="fs-3 text-center">Redefinição da senha</h1>
            </div>

            <fieldset>
                <legend class="mb-3">Username</legend>

                <section class="mb-4 row">
                    <div class="col-12 col-lg-6 mb-3">
                        <label class="form-text" for="new-password">Nova senha</label>
                        <input class="form-control w-100" id="new-password" type="password">
                    </div>
                    <div class="col-12 col-lg-6 mb-3">
                        <label class="form-text" for="new-password-confirm">Confirme a nova senha</label>
                        <input class="form-control w-100" id="new-password-confirm" type="password">
                    </div>
                </section>
            </fieldset>

            <section class="d-flex justify-content-center mb-3">
                <div class="align-items-center col-12 d-flex gap-4 justify-content-between flex-column-reverse flex-lg-row">
                    <a class="btn btn-form-outline w-100" href="#">Página inicial</a>
                    <button class="btn btn-form text-white w-100" type="button">Redefinir</button>
                </div>
            </section>
        </form>
    </section>
</main>
@endsection