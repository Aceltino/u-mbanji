@extends('layouts.main')

@section('title', 'Sobre')

@section('conteudo')
<main>
    <!--    *Main img start   -->
    <section class="bg-about-main-img mb-3">
        <div class="d-flex justify-content-center align-items-center vw-100" id="bg-image-section-about">
            <h1 class="py-5 text-capitalize text-center text-white">Sobre o portal<br> <b>U-Mbanji</b></h1>
        </div>
    </section>
    <!--    *End of main img   -->

    <!--    *First impressions start   -->
    <section class="container-fluid mt-1 pe-4 ps-2 py-4">
        <div class="accordion px-3" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <strong class="darkest-brown fs-4">Portal U-Mbanji</strong>
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body fs-5 text-dark">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong class="darkest-brown fs-4">Portal U-Mbanji</strong>
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body fs-5 text-dark">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong class="darkest-brown fs-4">Portal U-Mbanji</strong>
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body fs-5 text-dark">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <strong class="darkest-brown fs-4">Portal U-Mbanji</strong>
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body fs-5 text-dark">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    *End of first impressions   -->

    <!--    *Frequently asked questions start   -->
    <section class="container-fluid pe-4 ps-2 mt-1">
        <div class="ps-3">
            <h2 class="display-6 fs-4 mb-3">Perguntas mais frequentes...</h2>
        </div>
        <div class="accordion px-3" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <strong class="darkest-brown fs-4">Portal U-Mbanji</strong>
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body fs-5 text-dark">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <strong class="darkest-brown fs-4">Portal U-Mbanji</strong>
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body fs-5 text-dark">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <strong class="darkest-brown fs-4">Portal U-Mbanji</strong>
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body fs-5 text-dark">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
        </div>
    </section>
    <!--    *End of frequently asked questions   -->

    <!--    *Contact section start   -->
    <section class="container my-5 pb-5 px-5" id="contact-section">
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
@endsection