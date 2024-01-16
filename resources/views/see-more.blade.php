@extends('layouts.main')

@section('title', 'Ver mais')

@section('conteudo')
<main class="w-100">
    <!--    *Main carousel section start   -->
    <section>
        <!--    *Main carousel start   -->
        <div id="mainCarouselIndicatorsSeeMore" class="carousel slide vw-100">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarouselIndicatorsSeeMore" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#mainCarouselIndicatorsSeeMore" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#mainCarouselIndicatorsSeeMore" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/sample-house-lg.png" class="d-block w-100" alt="House-1">
                </div>
                <div class="carousel-item">
                    <img src="../img/sample-house-lg.png" class="d-block w-100" alt="House-2">
                </div>
                <div class="carousel-item">
                    <img src="../img/sample-house-lg.png" class="d-block w-100" alt="House-3">
                </div>
            </div>
        </div>
        <!--    *End of main carousel  -->
    </section>
    <!--    *End of main carousel section   -->
    <!--    *Few images section start   -->
    <section class="container-fluid ps-4 pe-5 w-100">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-2 p-0">
                <img class="w-100" src="../img/sample-house.png" alt="House-4">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2 p-0">
                <img class="w-100" src="../img/sample-house.png" alt="House-4">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2 p-0">
                <img class="w-100" src="../img/sample-house.png" alt="House-4">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2 p-0">
                <img class="w-100" src="../img/sample-house.png" alt="House-4">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2 p-0">
                <img class="w-100" src="../img/sample-house.png" alt="House-4">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-2 p-0">
                <img class="w-100" src="../img/sample-house.png" alt="House-4">
            </div>
        </div>
    </section>
    <!--    *End of few images section   -->
    <!--    *Few descriptions section start   -->
    <section class="container-fluid ps-4 pe-5 py-5 w-100">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-7">
                <article class="px-3">
                    <h2>Sobre o lugar</h2>
                    <p class="fs-4">
                        Num tranquilo bairro suburbano, uma casa de dois andares se destaca pela sua aura acolhedora e charmosa. A fachada, pintada num tom suave de azul celeste, contrasta harmoniosamente com as janelas de madeira branca que parecem sorrir para quem passa... <span class="color-darkest-orange">(ver mais)</span>
                    </p>
                    <hr class="bg-transparent-orange h-4 rounded-3 w-75">
                </article>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-5">
                <article class="bg-transparent-orange rounded-3">
                    <span class="bg-darkest-orange d-block fs-4  mb-4 py-1 rounded-3 text-center text-white w-100">
                        Sobre o senhorio
                    </span>
                    <p class="fs-4 pb-4 pe-2 ps-2 text-center">
                        O Senhor Henrique é um senhorio de aparência imponente, mas de coração generoso. Com seus cabelos prateados e olhos atentos por trás dos óculos, ele carrega consigo a sabedoria de...
                    </p>
                </article>
            </div>
        </div>
    </section>
    <!--    *End of few descriptions section   -->
    <!--    *More descriptions section start   -->
    <section class="bg-cream container-fluid py-5 w-100">
        <div class="row">
            <div class="col-12">
               <h2 class="color-darkest-orange text-center">Sala de estar</h2>
               <div class="d-flex justify-content-evenly mt-5">
                    <div>
                        <ul class="fs-4">
                            <li>2 Poltronas</li>
                            <li>1 TV</li>
                            <li>Ar Condicionado</li>
                            <li>3 Camas</li>
                            <li>2 Mesas</li>
                            <li>6 Cadeiras</li>
                            <li>1 Fogão</li>
                            <li>1 Geladeira</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="fs-4">
                            <li>2 Poltronas</li>
                            <li>1 TV</li>
                            <li>Ar Condicionado</li>
                            <li>3 Camas</li>
                            <li>2 Mesas</li>
                            <li>6 Cadeiras</li>
                            <li>1 Fogão</li>
                            <li>1 Geladeira</li>
                        </ul>
                    </div>
               </div>
            </div>
        </div>
    </section>
    <!--    *End of more descriptions section   -->
</main>
@endsection