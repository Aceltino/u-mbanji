@extends('layouts.main')

@section('title', 'Home')

@section('conteudo')
<!--    *Main start    -->
<main class="w-100">
    <!--    *Carousel-1 start   -->
    <div id="carouselExampleIndicators" class="carousel slide vw-100">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/img-1.png" class="d-block vw-100" alt="Advertising-1">
                <div class="carousel-caption d-none d-md-block position-absolute start-0 text-start top-0 px-5 pt-5 w-50">
                    <h1 class="fs-7 text-uppercase">U-Mbanji</h1>
                    <h2 class="fs-2 text-uppercase">O portal de <span class="color-darkest-orange">venda</span>/<span class="color-darkest-orange">aluguel</span> de <span class="color-darkest-orange">casa!</span></h2>
                    <p class="fs-4 mt-4">A <span class="color-darkest-orange">U-MBANJI</span> dá-te a possibilidade de divulgar <span class="color-darkest-orange">gratuitamente</span> a sua CASA. Milhares de pessoas procuram por uma casa <span class="the-blue-one">aqui</span> no nosso portal, você também pode encontrar a sua casa aqui</p>
                    <a class="a-main-bg py-1 px-5 rounded-2 text-center text-white text-uppercase w-100" href="#">Saber mais</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/img-1.png" class="d-block vw-100" alt="Advertising-2">
                <div class="carousel-caption d-none d-md-block position-absolute start-0 text-start top-0 px-5 pt-5 w-50">
                    <h1 class="fs-7 text-uppercase">U-Mbanji</h1>
                    <h2 class="fs-2 text-uppercase">O portal de <span class="color-darkest-orange">venda</span>/<span class="color-darkest-orange">aluguel</span> de <span class="color-darkest-orange">casa!</span></h2>
                    <p class="fs-4 mt-4">A <span class="color-darkest-orange">U-MBANJI</span> dá-te a possibilidade de divulgar <span class="color-darkest-orange">gratuitamente</span> a sua CASA. Milhares de pessoas procuram por uma casa <span class="the-blue-one">aqui</span> no nosso portal, você também pode encontrar a sua casa aqui</p>
                    <a class="a-main-bg py-1 px-5 rounded-2 text-center text-white text-uppercase w-100" href="#">Saber mais</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/img-1.png" class="d-block vw-100" alt="Advertising-3">
                <div class="carousel-caption d-none d-md-block position-absolute start-0 text-start top-0 px-5 pt-5 w-50">
                    <h1 class="fs-7 text-uppercase">U-Mbanji</h1>
                    <h2 class="fs-2 text-uppercase">O portal de <span class="color-darkest-orange">venda</span>/<span class="color-darkest-orange">aluguel</span> de <span class="color-darkest-orange">casa!</span></h2>
                    <p class="fs-4 mt-4">A <span class="color-darkest-orange">U-MBANJI</span> dá-te a possibilidade de divulgar <span class="color-darkest-orange">gratuitamente</span> a sua CASA. Milhares de pessoas procuram por uma casa <span class="the-blue-one">aqui</span> no nosso portal, você também pode encontrar a sua casa aqui</p>
                    <a class="a-main-bg py-1 px-5 rounded-2 text-center text-white text-uppercase w-100" href="#">Saber mais</a>
                </div>
            </div>
        </div>
    </div>
    <!--    *End of carousel-1  -->

    <!--    *Section between the carousels start    -->
    <section class="vw-100 pt-5 px-5">
        <h2 class="darkest-brown w-50 w-100-md">Encontramos residências em todos os cantos de Angola!</h2>
    </section>
    <!--    *End of section between the carousels    -->

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
                <div class="carousel-caption mt-5 position-absolute start-0 text-start top-0 px-5 w-100">
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
                <div class="carousel-caption mt-5 position-absolute start-0 text-start top-0 px-5 w-100">
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
                <div class="carousel-caption mt-5 position-absolute start-0 text-start top-0 px-5 w-100">
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

    <!--    *Recently Posted Section start    -->
    <section id="recently-posted-section" class="my-3 py-3">
        <div class="px-5">
            <h2 class="darkest-brown mb-4">Postados recentemente...</h2>
        </div>

        <div id="cards-section">
            <!--    *Carousel-3 start   -->
            <div id="carouselExampleHouses" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <!--    *Card-1 start    -->
                            <div class="card special-card" style="width: 14rem;">
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
                            <div class="card d-none d-sm-block special-card" style="width: 14rem;">
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
                            <div class="card d-none d-md-block special-card" style="width: 14rem;">
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
                            <div class="card d-none d-lg-block special-card" style="width: 14rem;">
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
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <!--    *Card-1 start    -->
                            <div class="card special-card" style="width: 14rem;">
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
                            <div class="card d-none d-sm-block special-card" style="width: 14rem;">
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
                            <div class="card d-none d-md-block special-card" style="width: 14rem;">
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
                            <div class="card d-none d-lg-block special-card" style="width: 14rem;">
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
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <!--    *Card-1 start    -->
                            <div class="card special-card" style="width: 14rem;">
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
                            <div class="card d-none d-sm-block special-card" style="width: 14rem;">
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
                            <div class="card d-none d-md-block special-card" style="width: 14rem;">
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
                            <div class="card d-none d-lg-block special-card" style="width: 14rem;">
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
        <div class="d-flex my-5 justify-content-center" id="see-more-link-section">
            <a class="btn btn-success btn-sm w-50" href="#">Ver mais casas <i class="bi bi-arrow-right-circle d-none d-md-inline"></i></a>
        </div>
    </section>
    <!--    *End of recently posted section    -->

    <!--    *Contact section start   -->
    <section class="container px-5" id="contact-section">
        <div class="row">
            <div class="col-md-6 contact-section-div-1 d-flex justify-content-center">
                <form action="">
                    <div class="contact-section-div-1-1">
                        <h3 class="darkest-brown">Fale connosco</h3>
                        <p class="darkest-brown">Para mais informações preencha:</p>
                        <span class="form-text">Assunto</span>
                        <textarea class="form-control mb-3" name="" id="" cols="30" rows="1"></textarea>
                    </div>
                    <div class="contact-section-div-1-2">
                        <div class="d-flex gap-2" id="contact-inputs">
                            <div>
                                <span class="form-text">E-mail</span>
                                <input class="form-control mb-3 w-100" type="email">
                            </div>
                            <div>
                                <span class="form-text">Telefone</span>
                            <input class="form-control w-100" type="tel">
                            </div>
                        </div>
                        <div class="mt-4" id="contact-btn">
                            <button class="btn main-btn-bg text-white w-100" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="align-items-md-center align-items-start col-md-6 contact-section-div-2 d-flex flex-column mt-md-0 mt-5">
                <div>
                    <div id="contact-section-div-2-1">
                        <h3 class="darkest-brown">Se preferir...</h3>
                        <p class="darkest-brown">Use os contactos telefônicos abaixo:</p>
                        <h5 class="darkest-brown">946839264 <small>e</small> 946839264</h5>
                        
                    </div>
                    <div id="contact-section-div-2-2">
                        <h3 class="darkest-brown">Ou...</h3>
                        <h5 class="darkest-brown">as nossas redes sociais:</h5>
                        <div id="icons-div">
                            <i class="bi bi-facebook darkest-brown fs-1"></i>
                            <i class="bi bi-instagram darkest-brown fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    *End of contact section   -->
</main>
<!--    *End of main    -->
@endsection