@extends('../layouts.main-client-owner')

@section('title', 'Home')

@section('conteudo')
<!--    *Main start    -->
<main class="w-100">
    <!--    *Search section start    -->
    <section class="container vw-100 pt-3">
        <div class="row">
            <div class="col-10 col-lg-4 offset-1 offset-lg-4">
                <div class="input-group">
                    <input class="form-control" type="search" name="" id="" placeholder="Procurar alguém">
                    <div class="input-group-append">
                        <span class="input-group-text" id="search-icon">
                            <i class="bi bi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    *End of section between the carousels    -->

    <!--    *Main section start   -->
    <section class="bg-other-cream-color container-fluid mt-3 px-5 py-3">
        <div class="row">
            <div class="col-10 col-lg-7 d-flex justify-content-center offset-1 offset-lg-0">
                <div class="card" style="width: 20rem;">
                    <img src="../img/main-profile-photo.png" class="card-img-top" alt="...">
                    <div class="card-body container-fluid">
                        <div class="row">
                            <div class="col-4 col-lg-5">
                                <p class="card-text">Meu perfil</p>
                                <p class="card-text">Telefone</p>
                            </div>
                            <div class="col-8 col-lg-7 d-flex flex-column">
                                <p class="card-text fw-bolder">Proprietário/cliente</p>
                                <p class="card-text fw-bolder">(+244) 944 880 743</p>
                                <p class="card-text fw-bolder">(+244) 944 880 743</p>
                            </div>
                        </div>
                        <p class="card-text fw-bolder text-center">Aceltino Kiaku Mateus Quianvo</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn main-btn-bg px-4 text-white">Atualizar perfil</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10 col-lg-5 d-flex justify-content-center mt-4 mt-lg-0 offset-1 offset-lg-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex d-lg-block justify-content-center">
                            <!--    *Carousel-1 start   -->
                            <div id="carouselExampleIndicators-1" class="carousel d-none d-md-block slide w-75">
                                <div class="carousel-indicators special-positioning
                                position-absolute">
                                    <button type="button" data-bs-target="#carouselExampleIndicators-1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators-1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators-1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner rounded-2">
                                    <div class="carousel-item active">
                                        <img src="../img/white-background.jpg" class="d-block w-100" alt="Advertising-4">
                                        <div class="carousel-caption position-absolute start-0 text-start top-0 px-1 py-0 w-100">
                                            <div class="align-items-center d-flex justify-content-around w-100">
                                                <div>
                                                    <h6 class="fs-special fw-bolder mt-3 text-center text-black ">Regulamento (Proprietário)</h6>
                                                    <p class="mx-2 my-0 text-black">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga mollitia expedita perferendis itaque. Repellendus dolorum atque illum libero repellat dolore consectetur rem quidem quasi architecto, vero quia debitis ipsum natus!</p>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="#" class="btn btn-sm  main-btn-bg px-4 text-white">Saber mais</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../img/white-background.jpg" class="d-block w-100" alt="Advertising-5">
                                        <div class="carousel-caption position-absolute start-0 text-start top-0 px-1 py-0 w-100">
                                            <div class="align-items-center d-flex justify-content-around w-100">
                                                <div>
                                                    <h6 class="darkest-brown fs-special fw-bolder">Encontre aqui a solução para os seus problemas...</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../img/white-background.jpg" class="d-block w-100" alt="Advertising-6">
                                        <div class="carousel-caption position-absolute start-0 text-start top-0 px-1 py-0 w-100">
                                            <div class="align-items-center d-flex justify-content-around w-100">
                                                <div>
                                                    <h6 class="darkest-brown fs-special fw-bolder">Sinta-se em casa!</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--    *End of carousel-1  -->
                        </div>
                        <div class="col-12 d-flex d-lg-block justify-content-center mt-4">
                            <div class="bg-white py-3 rounded-2 w-75">
                                <h5 class="darkest-brown fs-special fw-bolder text-center">Solicitações em curso</h5>
                                <div class="d-flex justify-content-center align-items-center gap-5 ">
                                    <span class="darkest-brown fw-bolder fs-1 ms-5">0</span>
                                    <i class="bi bi-caret-right-fill color-pink-orange fs-2"></i>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-sm  main-btn-bg px-4 text-white">Solicitar Propriedades</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    *End of Main section    -->

    <!--    *Carousel-2 start   -->
    <div id="carouselExampleIndicators-1" class="carousel d-none d-md-block slide vw-100">
        <div class="carousel-indicators special-positioning
        position-absolute">
            <button type="button" data-bs-target="#carouselExampleIndicators-1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-1" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/linear-gradient.png" class="d-block vw-100" alt="Advertising-4">
                <div class="carousel-caption mt-0 position-absolute start-0 text-start top-0 px-5 w-100">
                    <div class="align-items-center d-flex mt-5 justify-content-around w-100">
                        <div class="w-50">
                            <img src="../img/img-2.png" alt="Young people living together" class="w-75">
                        </div>
                        <div class="w-50">
                            <h2 class="darkest-brown fs-1 fs-special fw-bolder w-75">Precisa de casa para um convívio entre kambas?</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/linear-gradient.png" class="d-block vw-100" alt="Advertising-5">
                <div class="carousel-caption mt-0 position-absolute start-0 text-start top-0 px-5 w-100">
                    <div class="align-items-center d-flex mt-5 justify-content-around w-100">
                        <div class="w-50">
                            <img src="../img/img-2.png" alt="Young people living together" class="w-75">
                        </div>
                        <div class="w-50">
                            <h2 class="darkest-brown fs-1 fs-special fw-bolder w-75">Encontre aqui a solução para os seus problemas...</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/linear-gradient.png" class="d-block vw-100" alt="Advertising-6">
                <div class="carousel-caption mt-0 position-absolute start-0 text-start top-0 px-5 w-100">
                    <div class="align-items-center d-flex mt-5 justify-content-around w-100">
                        <div class="w-50">
                            <img src="../img/img-2.png" alt="Young people living together" class="w-75">
                        </div>
                        <div class="w-50">
                            <h2 class="darkest-brown fs-1 fs-special fw-bolder w-75">Sinta-se em casa!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    *End of carousel-2  -->
</main>
<!--    *End of main    -->
@endsection