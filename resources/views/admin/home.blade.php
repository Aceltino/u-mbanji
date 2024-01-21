@extends('../layouts.main-admin')

@section('title', 'Home')

@section('conteudo')
<!--    *Main start    -->
<main class="w-100">
    <!--    *Main section start   -->
    <section class="bg-other-cream-color container-fluid px-5 py-3">
    <div id="cards-section">
        <!--    *Carousel-3 start   -->
        <div id="carouselExampleHouses" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <!--    *Card-1 start    -->
                        <div class="card special-card py-4" style="width: 14rem;">
                            <div class="d-flex justify-content-center mt-2">
                                <i class="bi bi-check-circle color-pink-orange fs-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-title fs-red-1 text-center text-uppercase">Propriedades cadastradas</p>
                                    <span class="darkest-brown fs-1">0</span>
                                </div>
                                <a href="#" class="a-adm-main-btn btn color-old-brown w-100">Ver mais</a>
                            </div>
                        </div>
                        <!--    *End of card-1    -->
                        <!--    *Card-2 start    -->
                        <div class="card d-none d-sm-block py-4 special-card" style="width: 14rem;">
                            <div class="d-flex justify-content-center mt-2">
                                <i class="bi bi-check-circle color-pink-orange fs-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-title fs-red-1 text-center text-uppercase">Propriedades alugadas</p>
                                    <span class="darkest-brown fs-1">0</span>
                                </div>
                                <a href="#" class="a-adm-main-btn btn color-old-brown w-100">Ver mais</a>
                            </div>
                        </div>
                        <!--    *End of card-2    -->
                        <!--    *Card-3 start    -->
                        <div class="card d-none d-md-block py-4 special-card" style="width: 14rem;">
                            <div class="d-flex justify-content-center mt-2">
                                <i class="bi bi-check-circle color-pink-orange fs-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-title fs-red-1 text-center text-uppercase">Propriedades vendidas</p>
                                    <span class="darkest-brown fs-1">0</span>
                                </div>
                                <a href="#" class="a-adm-main-btn btn color-old-brown w-100">Ver mais</a>
                            </div>
                        </div>
                        <!--    *End of card-3    -->
                        <!--    *Card-4 start    -->
                        <div class="card d-none d-lg-block py-4 special-card" style="width: 14rem;">
                            <div class="d-flex justify-content-center mt-2">
                                <i class="bi bi-check-circle color-pink-orange fs-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-title fs-red-1 text-center text-uppercase">Propriedades cadastradas</p>
                                    <span class="darkest-brown fs-1">0</span>
                                </div>
                                <a href="#" class="a-adm-main-btn btn color-old-brown w-100">Ver mais</a>
                            </div>
                        </div>
                        <!--    *End of card-4    -->
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <!--    *Card-1 start    -->
                        <div class="card special-card py-4" style="width: 14rem;">
                            <div class="d-flex justify-content-center mt-2">
                                <i class="bi bi-check-circle color-pink-orange fs-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-title fs-red-1 text-center text-uppercase">Propriedades cadastradas</p>
                                    <span class="darkest-brown fs-1">0</span>
                                </div>
                                <a href="#" class="a-adm-main-btn btn color-old-brown w-100">Ver mais</a>
                            </div>
                        </div>
                        <!--    *End of card-1    -->
                        <!--    *Card-2 start    -->
                        <div class="card d-none d-sm-block py-4 special-card" style="width: 14rem;">
                            <div class="d-flex justify-content-center mt-2">
                                <i class="bi bi-check-circle color-pink-orange fs-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-title fs-red-1 text-center text-uppercase">Propriedades alugadas</p>
                                    <span class="darkest-brown fs-1">0</span>
                                </div>
                                <a href="#" class="a-adm-main-btn btn color-old-brown w-100">Ver mais</a>
                            </div>
                        </div>
                        <!--    *End of card-2    -->
                        <!--    *Card-3 start    -->
                        <div class="card d-none d-md-block py-4 special-card" style="width: 14rem;">
                            <div class="d-flex justify-content-center mt-2">
                                <i class="bi bi-check-circle color-pink-orange fs-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-title fs-red-1 text-center text-uppercase">Propriedades vendidas</p>
                                    <span class="darkest-brown fs-1">0</span>
                                </div>
                                <a href="#" class="a-adm-main-btn btn color-old-brown w-100">Ver mais</a>
                            </div>
                        </div>
                        <!--    *End of card-3    -->
                        <!--    *Card-4 start    -->
                        <div class="card d-none d-lg-block py-4 special-card" style="width: 14rem;">
                            <div class="d-flex justify-content-center mt-2">
                                <i class="bi bi-check-circle color-pink-orange fs-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-title fs-red-1 text-center text-uppercase">Propriedades cadastradas</p>
                                    <span class="darkest-brown fs-1">0</span>
                                </div>
                                <a href="#" class="a-adm-main-btn btn color-old-brown w-100">Ver mais</a>
                            </div>
                        </div>
                        <!--    *End of card-4    -->
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <!--    *Card-1 start    -->
                        <div class="card special-card py-4" style="width: 14rem;">
                            <div class="d-flex justify-content-center mt-2">
                                <i class="bi bi-check-circle color-pink-orange fs-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-title fs-red-1 text-center text-uppercase">Propriedades cadastradas</p>
                                    <span class="darkest-brown fs-1">0</span>
                                </div>
                                <a href="#" class="a-adm-main-btn btn color-old-brown w-100">Ver mais</a>
                            </div>
                        </div>
                        <!--    *End of card-1    -->
                        <!--    *Card-2 start    -->
                        <div class="card d-none d-sm-block py-4 special-card" style="width: 14rem;">
                            <div class="d-flex justify-content-center mt-2">
                                <i class="bi bi-check-circle color-pink-orange fs-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-title fs-red-1 text-center text-uppercase">Propriedades alugadas</p>
                                    <span class="darkest-brown fs-1">0</span>
                                </div>
                                <a href="#" class="a-adm-main-btn btn color-old-brown w-100">Ver mais</a>
                            </div>
                        </div>
                        <!--    *End of card-2    -->
                        <!--    *Card-3 start    -->
                        <div class="card d-none d-md-block py-4 special-card" style="width: 14rem;">
                            <div class="d-flex justify-content-center mt-2">
                                <i class="bi bi-check-circle color-pink-orange fs-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-title fs-red-1 text-center text-uppercase">Propriedades vendidas</p>
                                    <span class="darkest-brown fs-1">0</span>
                                </div>
                                <a href="#" class="a-adm-main-btn btn color-old-brown w-100">Ver mais</a>
                            </div>
                        </div>
                        <!--    *End of card-3    -->
                        <!--    *Card-4 start    -->
                        <div class="card d-none d-lg-block py-4 special-card" style="width: 14rem;">
                            <div class="d-flex justify-content-center mt-2">
                                <i class="bi bi-check-circle color-pink-orange fs-1"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <p class="card-title fs-red-1 text-center text-uppercase">Propriedades cadastradas</p>
                                    <span class="darkest-brown fs-1">0</span>
                                </div>
                                <a href="#" class="a-adm-main-btn btn color-old-brown w-100">Ver mais</a>
                            </div>
                        </div>
                        <!--    *End of card-4    -->
                    </div>
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleHouses" data-bs-slide="prev">
                <span class="bg-transparent-orange carousel-control-prev-icon rounded-1" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleHouses" data-bs-slide="next">
                <span class="bg-transparent-orange carousel-control-next-icon rounded-1" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
            <!--    *End of carousel-3  -->
        </div>
    </section>
    <!--    *End of Main section    -->

    <div class="container px-5 bg-darkest-brown">
        <hr>
    </div>

    <section class="container">
        <div class="mb-3 row">
            <div class="bg-form-orange col-10 col-lg-8 offset-1 offset-lg-2 d-flex justify-content-evenly opacity-75 px-3 py-3 rounded-3">
                <div class="w-25">
                    <img src="../img/user-example.png" alt="" class="w-25 rounded-3">
                </div>
                <div class="d-flex flex-column align-items-end">
                    <span><strong>Agostinho Famoroso Zage</strong> solicita arrendar a sua propriedade.</span>
                    <a class="color-old-brown" href="#">Ver mais informações</a>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="bg-form-orange col-10 col-lg-8 offset-1 offset-lg-2 d-flex justify-content-evenly px-3 py-3 rounded-3">
                <div class="w-25">
                    <img src="../img/user-example.png" alt="" class="w-25 rounded-3">
                </div>
                <div class="d-flex flex-column align-items-end">
                    <span><strong>Agostinho Famoroso Zage</strong> solicita arrendar a sua propriedade.</span>
                    <a class="color-old-brown" href="#">Ver mais informações</a>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="bg-form-orange col-10 col-lg-8 offset-1 offset-lg-2 d-flex justify-content-evenly opacity-75 px-3 py-3 rounded-3">
                <div class="w-25">
                    <img src="../img/user-example.png" alt="" class="w-25 rounded-3">
                </div>
                <div class="d-flex flex-column align-items-end">
                    <span><strong>Agostinho Famoroso Zage</strong> solicita arrendar a sua propriedade.</span>
                    <a class="color-old-brown" href="#">Ver mais informações</a>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-10 col-lg-8 offset-1 offset-lg-2 d-flex justify-content-end px-0 py-3">
                <div>
                    <a class="btn btn-success w-100" href="#">Ver mais casas <i class="bi bi-arrow-right-circle d-none d-md-inline ms-1"></i></a>
                </div>
            </div>
        </div>
        <div class="mb-3 ms-5 row">
            <div class="col-10 col-lg-8 offset-1 offset-lg-2 px-0 py-3">
                <div class="row gap-lg-5">
                    <!--    Little-card-1 start   -->
                    <div class="col-10 col-lg-3 bg-success offset-1 offset-lg-0 py-2">
                        <div class="d-flex justify-content-between">
                            <span class="fs-1 text-white">0</span>
                            <i class="bi bi-cash fs-1 text-white"></i>
                        </div>
                        <div>
                            <p class="text-center text-white text-uppercase">Yellow</p>
                            <p class="text-center text-white text-uppercase">Propriedades Negociadas</p>
                        </div>
                        <div>
                            <a class="btn btn-success w-100" href="#">Ver mais casas <i class="bi bi-arrow-right-circle d-none d-md-inline ms-1"></i></a>
                        </div>
                    </div>
                    <!--    Little-card-1 end   -->
                    <!--    Little-card-2 start   -->
                    <div class="col-10 col-lg-3 bg-success offset-1 offset-lg-0 py-2">
                        <div class="d-flex justify-content-between">
                            <span class="fs-1 text-white">0</span>
                            <i class="bi bi-cash fs-1 text-white"></i>
                        </div>
                        <div>
                            <p class="text-center text-white text-uppercase">Red</p>
                            <p class="text-center text-white text-uppercase">Comprovativos não enviados</p>
                        </div>
                        <div>
                            <a class="btn btn-success w-100" href="#">Ver mais casas <i class="bi bi-arrow-right-circle d-none d-md-inline ms-1"></i></a>
                        </div>
                    </div>
                    <!--    Little-card-2 end   -->
                    <!--    Little-card-3 start   -->
                    <div class="col-10 col-lg-3 bg-success offset-1 offset-lg-0 py-2">
                        <div class="d-flex justify-content-between">
                            <span class="fs-1 text-white">0</span>
                            <i class="bi bi-cash fs-1 text-white"></i>
                        </div>
                        <div>
                            <p class="text-center text-white text-uppercase">Comprovativos enviados</p>
                        </div>
                        <div>
                            <a class="btn btn-success w-100" href="#">Ver mais casas <i class="bi bi-arrow-right-circle d-none d-md-inline ms-1"></i></a>
                        </div>
                    </div>
                    <!--    Little-card-3 end   -->
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-4 px-5 bg-darkest-brown">
        <hr>
    </div>
</main>
<!--    *End of main    -->
@endsection