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

    <!--    *Samples section   -->
    <section class="container">
        <!--    *Row-1 start    -->
        <div class="d-flex justify-content-evenly py-3 row">
            <!--    *Card-1 start    -->
            <div class="card p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-1    -->
            <!--    *Card-2 start    -->
            <div class="card d-none d-sm-block p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-2    -->
            <!--    *Card-3 start    -->
            <div class="card d-none d-md-block p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-3    -->
            <!--    *Card-4 start    -->
            <div class="card d-none d-lg-block p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-4    -->
        </div>
        <!--    *End of row-1    -->
        <!--    *Row-2 start    -->
        <div class="d-flex justify-content-evenly py-3 row">
            <!--    *Card-1 start    -->
            <div class="card p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-1    -->
            <!--    *Card-2 start    -->
            <div class="card d-none d-sm-block p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-2    -->
            <!--    *Card-3 start    -->
            <div class="card d-none d-md-block p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-3    -->
            <!--    *Card-4 start    -->
            <div class="card d-none d-lg-block p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-4    -->
        </div>
        <!--    *End of row-2    -->
        <!--    *Row-3 start    -->
        <div class="d-flex justify-content-evenly py-3 row">
            <!--    *Card-1 start    -->
            <div class="card p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-1    -->
            <!--    *Card-2 start    -->
            <div class="card d-none d-sm-block p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-2    -->
            <!--    *Card-3 start    -->
            <div class="card d-none d-md-block p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-3    -->
            <!--    *Card-4 start    -->
            <div class="card d-none d-lg-block p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-4    -->
        </div>
        <!--    *End of row-3    -->
        <!--    *Row-4 start    -->
        <div class="d-flex justify-content-evenly py-3 row">
            <!--    *Card-1 start    -->
            <div class="card p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-1    -->
            <!--    *Card-2 start    -->
            <div class="card d-none d-sm-block p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-2    -->
            <!--    *Card-3 start    -->
            <div class="card d-none d-md-block p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-3    -->
            <!--    *Card-4 start    -->
            <div class="card d-none d-lg-block p-0 special-card" style="width: 14rem;">
                <img src="../img/sample-house.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <h6 class="card-title color-darkest-orange">120.000,000.000.000 kz</h6>
                        <p class="color-darkest-orange">3 x Parcelado</p>
                    </div>
                    <h6 class="card-text mb-4">Prenda, Rua CDTE Arguelles, T4, 1 WC, 1 Cozinha, Jardim...</h6>
                    <a href="#" class="a-main-like-btn-bg btn btn-sm text-white w-100">Ver mais</a>
                </div>
            </div>
            <!--    *End of card-4    -->
        </div>
        <!--    *End of row-4    -->
    </section>
    <!--    *End of samples section   -->
</main>
@endsection