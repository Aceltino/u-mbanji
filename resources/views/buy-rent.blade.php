@extends('layouts.main')

@section('title', 'Alugar ou Comprar casa')

@section('conteudo')
<main>
    <!--    *Main img start   -->
    <section class="bg-about-main-img mb-3">
        <div class="d-flex justify-content-center align-items-center vw-100" id="bg-image-section-about">
            <div class="d-flex flex-column align-items-center">
                <h1 class="fs-7 py-3 text-center text-white">O que procura?</h1>
                <select class="bg-transparent border-2 border-white form-select text-center text-white w-75"  id="">
                    <option class="color-darkest-orange text-center"  value="0">Alugar uma casa</option>
                    <option class="color-darkest-orange text-center"  value="1">Comprar uma casa</option>
                </select>
            </div>
        </div>
    </section>
    <!--    *End of main img   -->

    <!--    *Search section start   -->
    <section class="container-fluid me-3 ms-2 mt-1 py-4">
        <div class="py-4 row">
            <h2 class="darkest-brown text-center">Procure as casas segundo a sua preferência...</h2>
        </div>
        <div class="row px-2">
            <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                <select class="bg-darkest-orange border-0 form-select text-center text-white"  id="">
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="0">Tipo de casa</option>
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="1">Apartamento</option>
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="2">Vivenda</option>
                </select>
            </div>
            <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                <select class="bg-darkest-orange border-0 form-select text-center text-white"  id="">
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="0">Província</option>
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="1">Benguela</option>
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="2">Malanje</option>
                </select>
            </div>
            <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                <select class="bg-darkest-orange border-0 form-select text-center text-white"  id="">
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="0">Município</option>
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="1">Viana</option>
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="2">Zango</option>
                </select>
            </div>
            <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                <select class="bg-darkest-orange border-0 form-select text-center text-white"  id="">
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="0">Preçário</option>
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="1">125.000,00 Kzs</option>
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="2">376.000,00 Kzs</option>
                </select>
            </div>
        </div>
        <div class="row d-flex justify-content-center px-2 py-0 py-md-3">
            <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                <select class="bg-darkest-orange border-0 form-select text-center text-white"  id="">
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="0">Nº de quartos</option>
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="1">1</option>
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="2">2</option>
                </select>
            </div>
            <div class="col-md-3 d-flex justify-content-center mb-2 mb-md-0">
                <select class="bg-darkest-orange border-0 form-select text-center text-white"  id="">
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="0">Quanto tempo?</option>
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="1">1 dia</option>
                    <option class="bg-transparent-orange color-darkest-orange text-center"  value="2">1 mês</option>
                </select>
            </div>
        </div>
    </section>
    <!--    *End of search section   -->
</main>
@endsection