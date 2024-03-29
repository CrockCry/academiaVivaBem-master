    @extends('layout.layout')

    @section('tile', 'Noticias')

    @section('conteudo')

        <!doctype html>
        <html class="no-js" lang="zxx">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Fitmas - Gym & Fitness HTML Template</title>
            <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
            <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
            <meta name="robots" content="INDEX,FOLLOW">


        </head>

        <body>
            <!--********************************
                               Code Start From Here
                             ******************************** -->

            <!--==============================
                                Breadcumb
                                ============================== -->
            {{-- <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Our Services</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">SERVICE</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}

            <div class="breadcumb-wrapper">
                <video class="bg-video" autoplay muted loop>
                    <source src="assets/img/my/video/videoServico.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcumb-content">
                                <h1 class="breadcumb-title">Modalidades</h1>
                                <ul class="breadcumb-menu">
                                    <li><a href="{{ asset('/') }}">HOME</a></li>
                                    <li class="active">MODALIDADE</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--==============================
                                Service Area 02
                                ==============================-->
            <div class="service-area-2 space overflow-hidden">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card style2">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Musculação</a></h4>
                                    <p class="service-card_text">Foco em exercícios com pesos livres e máquinas para
                                        fortalecimento muscular e desenvolvimento físico.</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0"><i
                                            class="fas fa-arrow-right"></i> Leia mais</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card style2">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Treinos HIIT</a></h4>
                                    <p class="service-card_text">Treinos de alta intensidade que intercalam períodos de
                                        exercícios intensos com curtos períodos de descanso.</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0"><i
                                            class="fas fa-arrow-right"></i> Leia mais</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card style2">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Treinamento
                                            Funcional</a>
                                    </h4>
                                    <p class="service-card_text">Exercícios que simulam movimentos do dia a dia para
                                        melhorar a
                                        força, estabilidade e mobilidade.</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0"><i
                                            class="fas fa-arrow-right"></i> Leia mais</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card style2">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_2-4.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Boxe</a></h4>
                                    <p class="service-card_text">O Boxe é uma atividade física que combina técnica,
                                        resistência
                                        e condicionamento físico.</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0"><i
                                            class="fas fa-arrow-right"></i> Leia mais</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card style2">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_2-5.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Yoga e Pilates</a></h4>
                                    <p class="service-card_text">Práticas centradas no fortalecimento do corpo,
                                        flexibilidade,
                                        equilíbrio e relaxamento.</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0"><i
                                            class="fas fa-arrow-right"></i> Leia mais</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card style2">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_2-6.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Meditação e
                                            Relaxamento</a>
                                    </h4>
                                    <p class="service-card_text">Oferecer aulas de relaxamento, meditação e alongamento para
                                        o
                                        equilíbrio mental e físico.</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0"><i
                                            class="fas fa-arrow-right"></i> Leia mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--==============================
                                Cta Area
                                ==============================-->
            <section class="cta-area space" data-bg-src="assets/img/my/home2.png">
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-10">
                            <div class="cta-wrap text-center text-lg-start">
                                <div class="title-area">
                                    <span class="sub-title">Marque uma consulta</span>
                                    <h2 class="sec-title text-white fw-semibold">FAÇA SUA CONSULTA GRATIS AGORA MESMO!</h2>
                                </div>
                                <div class="btn-wrap mt-40">
                                    <a href="about.html" class="btn style2 style-r0">Marque uma consulta</a>
                                    <div class="about-info-wrap style3">
                                        <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                        <div class="details">
                                            <p class="about-info-title text-white">Precisa de ajuda?</p>
                                            <a class="about-info-link" href="tel:+25825692582">+55 (11)95063-XXXX</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==============================
                                Pricing plan Area
                                ==============================-->
            <div class="pricing-area space">
                <div class="container">
                    <div class="title-area text-center">
                        <h3 class="sub-title">Planos</h3>
                        <h2 class="sec-title">Nossos Planos</h2>
                    </div>
                    <div class="row gy-4 justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-card">
                                <div class="pricing-card_bg">
                                    <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                                </div>
                                <div class="pricing-card_icon">
                                    <img src="assets/img/icon/picing-icon_1-1.svg" alt="img">
                                </div>
                                <h3 class="pricing-card_title">Membro Gold</h3>
                                <h4 class="pricing-card_price"><span class="currency">R$</span>69,90<span
                                        class="duration">/mês</span>
                                </h4>
                                <p class="pricing-card_content">O plano "Gold" oferece uma experiência de academia
                                    abrangente para aqueles que buscam acesso completo às instalações e alguns serviços
                                    extras. </p>
                                <div class="checklist">
                                    <ul>
                                        <li><i class="far fa-check-circle"></i>Acesso ilimitado a área de treino</li>
                                        <li><i class="far fa-check-circle"></i>Participação de aulas em grupo</li>
                                        <li><i class="far fa-check-circle"></i>Acesso a vestiario com armário</li>
                                        <li><i class="far fa-check-circle"></i>Estacionamento gratis</li>
                                    </ul>
                                </div>
                                <a class="btn style2" href="pricing.html">Ser Gold</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-card pricing-card_active">
                                <div class="pricing-card_bg">
                                    <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                                </div>
                                <div class="pricing-card_icon">
                                    <img src="assets/img/icon/picing-icon_1-2.svg" alt="img">
                                </div>
                                <h3 class="pricing-card_title">Membro Platinum</h3>
                                <h4 class="pricing-card_price"><span class="currency">R$</span>89,90<span
                                        class="duration">/mês</span>
                                </h4>
                                <p class="pricing-card_content">O plano "Platinum" oferece uma experiência premium,
                                    incluindo todos os benefícios do plano "Gold" e alguns serviços adicionais.</p>
                                <div class="checklist">
                                    <ul>
                                        <li><i class="far fa-check-circle"></i>Benefícios do plano "Gold".</li>
                                        <li><i class="far fa-check-circle"></i>Sessões mensais com personal training</li>
                                        <li><i class="far fa-check-circle"></i>Aulas especiais e workshops fitnes</li>
                                        <li><i class="far fa-check-circle"></i>Acesso a área de relaxamento</li>
                                    </ul>
                                </div>
                                <a class="btn style2" href="pricing.html">Ser Platinum</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-card">
                                <div class="pricing-card_bg">
                                    <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                                </div>
                                <div class="pricing-card_icon">
                                    <img src="assets/img/icon/picing-icon_1-3.svg" alt="img">
                                </div>
                                <h3 class="pricing-card_title">Membro Diamond</h3>
                                <h4 class="pricing-card_price"><span class="currency">R$</span>109,90<span
                                        class="duration">/mês</span>
                                </h4>
                                <p class="pricing-card_content">O plano "Diamond" é a opção mais exclusiva, projetada para
                                    proporcionar uma experiência de academia de alto nível, com atenção personalizada e
                                    serviços premium.</p>
                                <div class="checklist">
                                    <ul>
                                        <li><i class="far fa-check-circle"></i>Benefícios do plano "Platinum"</li>
                                        <li><i class="far fa-check-circle"></i>Sessões semanais de personal training</li>
                                        <li><i class="far fa-check-circle"></i>Serviço de nutrição personalizado</li>
                                        <li><i class="far fa-check-circle"></i>Suporte adicional fora da academia</li>
                                    </ul>
                                </div>
                                <a class="btn style2" href="pricing.html">Ser Diamond</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--********************************
                               Code End  Here
                             ******************************** -->

            <!-- Scroll To Top -->
            <div class="scroll-top">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                        style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
                    </path>
                </svg>
            </div>

        </body>

        </html>

    @endsection
