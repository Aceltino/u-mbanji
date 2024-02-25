@extends('layouts.main-form')

@section('title', 'Adicionar dados bancários')

@section('conteudo')
<main class="container py-5 vh-100">
    <!--    *Register div start   -->
    <section class="align-items-center d-flex justify-content-center h-100 row">
        <form class="bg-form-orange col-12 px-4 py-4 rounded-3 w-75" action="">
            <div class="mb-4 w-50">
                <img alt="logo" class="w-25 " src="../img/footer-logo.png">
            </div>
            <div class="mb-4">
                <h1 class="fs-3 text-center">Adicionar dados bancários</h1>
            </div>

            <section class="mb-4 row">
                <div class="col-12 col-lg-6 mb-3">
                    <label class="form-text" for="iban">IBAN</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon2">AO06</span>
                        <input aria-describedby="basic-addon2"  class="form-control" id="iban" type="number">
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-3">
                    <label class="form-text" for="account-number">Número da conta</label>
                    <input class="form-control w-100" id="account-number" type="number">
                </div>
                <div class="col-12">
                        <div class="mb-3">
                            <label class="form-text" for="account-owner-name">Nome do proprietário da conta</label>
                            <input class="form-control w-100" id="account-owner-name" type="text">
                        </div>
                    </div>
            </section>

            <section class="d-flex justify-content-center mb-3">
                <div class="align-items-center col-12 d-flex gap-4 justify-content-between flex-column-reverse flex-lg-row">
                    <a class="btn btn-form-outline w-100" href="{{route('home')}}">Página inicial</a>
                    <button class="btn btn-form text-white w-100" type="button">Adicionar</button>
                </div>
            </section>
        </form>
    </section>
</main>
@endsection
