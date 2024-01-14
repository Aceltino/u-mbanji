@extends('layouts.main-form')

@section('title', 'Cadastre-se')

@section('conteudo')
<main class="container py-5">
    <!--    *Register div start   -->
    <section class="align-items-center d-flex justify-content-center">
        <form class="bg-form-orange px-4 py-4 rounded-3 w-75" action="">
            <div class="w-50">
                <img alt="logo" class="w-25 " src="../img/footer-logo.png">
            </div>
            <div>
                <h1 class="fs-3 text-center">Cadastro</h1>
            </div>
            <fieldset>
                <legend>Dados Pessoais</legend>
                <section class="row">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label class="form-text" for="fullname">Nome completo</label>
                            <input class="form-control" id="fullname" required type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-text" for="telephone-contact">Contacto telefônico</label>
                            <input class="form-control" id="telephone-contact" required type="tel">
                        </div>
                        <div>
                            <label class="form-text" for="email">E-mail</label>
                            <input class="form-control" id="email" required type="email">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label class="form-text" for="bi-number">Número do BI</label>
                            <input class="form-control" id="bi-number" required type="number">
                        </div>
                        <div class="mb-3">
                            <label class="form-text" for="password">Senha</label>
                            <input class="form-control" id="password" required type="password">
                        </div>
                        <div>
                            <label class="form-text" for="password-confirm">Confirme a senha</label>
                            <input class="form-control" id="password-confirm" required type="password">
                        </div>
                    </div>
                </section>
            </fieldset>

            <fieldset>
                <legend>Dados Bancários</legend>
                <section class="row">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label class="form-text" for="iban">IBAN</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">AO06</span>
                                <input aria-describedby="basic-addon1"  class="form-control" id="iban" type="number">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label class="form-text" for="account-number">Número da conta</label>
                            <input class="form-control" id="account-number" type="number">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-text" for="account-owner-name">Nome do proprietário da conta</label>
                            <input class="form-control w-100" id="account-owner-name" type="text">
                        </div>
                    </div>
                </section>
            </fieldset>

            <section class="d-flex justify-content-center">
                <div class="col-12 col-lg-4 d-flex flex-column justify-content-center">
                    <button class="btn btn-form mb-4 mt-3 text-white w-100" type="button">Cadastrar</button>
                    <a class="color-darkest-orange mb-4 text-center text-decoration-none" href="#">Já tem uma conta?</a>
                    <hr class="bg-darkest-orange color-darkest-orange mb-4 mt-1">
                    <a class="btn btn-form-outline mt-2 w-100" href="#">Página inicial</a>
                </div>
            </section>
        </form>
    </section>
</main>
@endsection