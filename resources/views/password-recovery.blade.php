@extends('layouts.main-form')

@section('title', 'Recuperar senha')

@section('conteudo')
<main class="container py-5 vh-100">
    <!--    *Register div start   -->
    <section class="align-items-center d-flex justify-content-center h-100">
        <form class="bg-form-orange px-5 py-4 rounded-3 w-75" action="">
            <div class="w-50">
                <img alt="logo" class="w-25 " src="../img/footer-logo.png">
            </div>
            <div class="mb-4">
                <h1 class="fs-3 text-center">Recuperação da senha</h1>
            </div>

            <section class="mb-4 row">
                <div class="col-12">
                    <div class="mb-3">
                        <label class="form-text" for="email">Introduza o seu e-mail</label>
                        <input class="form-control w-100" id="email" type="email">
                    </div>
                </div>
            </section>

            <section class="d-flex justify-content-center mb-3">
                <div class="align-items-center col-12 d-flex gap-4 justify-content-between">
                    <a class="btn btn-form-outline w-100" href="#">Voltar</a>
                    <button class="btn btn-form text-white w-100" type="button">Solicitar</button>
                </div>
            </section>
        </form>
    </section>
</main>
@endsection