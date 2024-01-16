@extends('layouts.main')

@section('title', 'Alugar ou Comprar casa')

@section('conteudo')
<main>
    <!--    *Main img start   -->
    <section class="bg-about-main-img mb-3">
        <div class="d-flex justify-content-center align-items-center vw-100" id="bg-image-section-about">
            <div class="d-flex flex-column align-items-center">
                <h1 class="py-3 text-center text-white">O que procura?</h1>
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
        <div class="px-2 row w-100">
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
        <div class="d-flex justify-content-center px-2 py-0 py-md-3 row w-100">
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
                    <button class="a-main-like-btn-bg btn text-white w-100" data-bs-toggle="modal" data-bs-target="#seeMoreModal" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
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
                    <button class="a-main-like-btn-bg btn text-white w-100" type="button">Ver mais</button>
                </div>
            </div>
            <!--    *End of card-4    -->
        </div>
        <!--    *End of row-4    -->
    </section>
    <!--    *End of samples section   -->

    <!--    *Pagination section start   -->
    <section class="container mt-5">
        <div class="d-flex justify-content-center">
            <div>
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link">Anterior</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Próximo</a>
                </li>
            </ul>
            </div>
        </div>
    </section>
    <!--    *End of pagination section   -->

    <!--    Modal start    -->
    <div class="modal fade" id="seeMoreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mais informações</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-lg-6 fs-2">
                                <i class="bi bi-house-fill"></i> 
                                <span>Apartamento</span>
                            </div>
                            <div class="col-12 col-lg-6 fs-2 text-start text-lg-end">
                                <i class="bi bi-house-fill"></i> 
                                <span>Luanda, Viana, Zango</span>
                            </div>
                        </div>
                        <div class="py-3 row">
                            <div class="align-items-center col-12 col-lg-6 d-flex flex-column mb-2 w-100">
                                <div class="d-flex gap-3">
                                    <input type="text" class="form-control" disabled value="Alugando">
                                    <input type="text" class="form-control" disabled value="6 meses">
                                </div>
                            </div>
                            <div class="color-darkest-orange fs-2 mt-4 text-center">
                                <p>120.000.000.000.000 Kz</p>
                            </div>
                        </div>
                    </section>
                    <section class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-uppercase">Detalhes da casa</h2>
                                <h3 class="darkest-brown">Descrição da casa</h3>
                            </div>
                        </div>
                        <div class="py-3 row">
                            <div class="align-items-center col-12 col-lg-6 d-flex flex-column mb-2 w-100">
                                <div class="d-flex gap-3 w-100">
                                    <ul class="list-group text-center w-50">
                                        <li class="list-group-item">4 Quartos</li>
                                        <li class="list-group-item">3 Salas</li>
                                        <li class="list-group-item">1 Piscina</li>
                                        <li class="list-group-item">1 Suite</li>
                                    </ul>
                                    <ul class="list-group text-center  w-50">
                                        <li class="list-group-item">4 Quartos</li>
                                        <li class="list-group-item">3 Salas</li>
                                        <li class="list-group-item">1 Piscina</li>
                                        <li class="list-group-item">1 Suite</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3 class="darkest-brown">Debilidades da casa</h3>
                            </div>
                        </div>
                        <div class="py-3 row">
                            <div class="align-items-center col-12 col-lg-6 d-flex flex-column mb-2 w-100">
                                <div class="d-flex gap-3 w-100">
                                    <ul class="list-group text-center w-50">
                                        <li class="list-group-item">Sem energia</li>
                                        <li class="list-group-item">Sem água</li>
                                        <li class="list-group-item">Paredes não pintadas</li>
                                        <li class="list-group-item">Casa de banho comum</li>
                                    </ul>
                                    <ul class="list-group text-center  w-50">
                                        <li class="list-group-item">Sem energia</li>
                                        <li class="list-group-item">Sem água</li>
                                        <li class="list-group-item">Paredes não pintadas</li>
                                        <li class="list-group-item">Casa de banho comum</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3 class="darkest-brown">Um pouco mais sobre a casa...</h3>
                            </div>
                        </div>
                        <div class="py-3 row">
                            <div class="align-items-center col-12 col-lg-6 d-flex flex-column mb-2 w-100">
                                <div>
                                    <p>
                                        Num tranquilo bairro suburbano, uma casa de dois andares se destaca pela sua aura acolhedora e charmosa. A fachada, pintada num tom suave de azul celeste, contrasta harmoniosamente com as janelas de madeira branca que parecem sorrir para quem passa... <a class="color-darkest-orange" href="#">(ver mais)</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <h2 class="text-center text-uppercase">O proprietário</h2>
                            </div>
                        </div>
                        <div class="py-3 row">
                            <div class="col-12 col-lg-5">
                                <div class="align-items-center d-flex h-100 justify-content-center">
                                    <img class="w-25" alt="photo" src="../img/photo-round.png">
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 mt-3 mt-lg-0">
                                <div class="bl-2 ps-2">
                                    <strong class="text-uppercase">Aceltino Kiaku Mateus Quianvo</strong>
                                    <p>+244 944 880 743</p>
                                    <p>+244 944 880 743</p>
                                    <p>cesaltinoquianvo@gmail.com</p>
                                    <p>Solicitações bem sucedidas: 5</p>
                                    <p class="mb-0">Poderá ter mais informações do proprietário caso avançarem com a negociação</p>
                                </div>
                            </div>

                            <div class="col-12 col-lg-5 mt-4">
                                <div class="align-items-center d-flex h-100 justify-content-center">
                                <h2 class="text-center text-uppercase">Dados bancários</h2>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 mt-4">
                                <div class="bl-2 ps-2">
                                    <div>
                                        <strong class="text-uppercase">Bai</strong>
                                        <p>A006.0040.0000.5319.1018.7</p>
                                        <p>0040.0000.5319.1018.7</p>
                                        <p class="text-uppercase">Aceltino Kiaku Mateus Quianvo</p>
                                    </div>
                                    <div>
                                        <strong class="text-uppercase">Banco Sol</strong>
                                        <p>A006.0040.0000.5319.1018.7</p>
                                        <p>0040.0000.5319.1018.7</p>
                                        <p class="text-uppercase">Aceltino Kiaku Mateus Quianvo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <section class="d-flex gap-3">
                        <button type="button" class="btn btn-warning px-5 text-white" data-bs-dismiss="modal">Voltar</button>
                        <button type="button" class="a-main-like-btn-bg btn text-white px-4">Solicitar casa</button>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!--    End of modal    -->
</main>
@endsection