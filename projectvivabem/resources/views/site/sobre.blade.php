@extends('layout.layout')

@section('tile', 'Sobre')

@section('conteudo')

    <!doctype html>
    <html class="no-js" lang="pt-BR">

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
        <div class="breadcumb-wrapper" data-bg-src="assets/img/my/sobre2.png">
            <!-- bg animated image/ -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Sobre nos</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">HOME</a></li>
                                <li class="active">SOBRE</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--==============================
                                    About Area
                                    ==============================-->
        <div class="space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-lg-2 text-lg-end">
                        <div class="about-thumb mb-5 mb-lg-0">
                            <img class="about-img-1" src="assets/img/my/sobre3.png" alt="img">
                            <img class="about-img-2 jump" src="assets/img/my/sobre3.1.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="about-content-wrap">
                            <div class="title-area mb-0">
                                <span class="sub-title">Um pouco mais sobre nós</span>
                                <h2 class="sec-title">Liberte todo o seu potencial, alcance seus objetivos.</h2>
                                <p class="sec-text">Bem-vindo ao VivaBem, seu destino final para alcançar seus objetivos de
                                    fitness. Entendemos a importância de levar um estilo de vida saudável e oferecemos uma
                                    instalação de fitness de alta qualidade para apoiá-lo em sua jornada de fitness.
                                </p>
                                <div class="about-tab-1">
                                    <div class="filter-menu-active">
                                        <button data-filter=".cat1" class="active" type="button">Missao</button>
                                        <button data-filter=".cat2" type="button">Visao</button>
                                        <button data-filter=".cat3" type="button">Valores</button>
                                    </div>
                                    <div class="filter-active-cat1">
                                        <div class="filter-item cat1">
                                            <div class="about-tab-icon">
                                                <img src="assets/img/icon/about-icon.svg" alt="img">
                                            </div>
                                            <p class="about-tab-text">Nossa missão é inspirar e promover um estilo de vida
                                                saudável, fornecendo um ambiente acolhedor e motivador, onde nossos membros
                                                possam alcançar seus objetivos de fitness. Buscamos oferecer programas e
                                                serviços personalizados, incentivando o bem-estar físico e mental de cada
                                                indivíduo.</p>
                                        </div>
                                        <div class="filter-item cat2">
                                            <div class="about-tab-icon">
                                                <img src="assets/img/icon/about-icon.svg" alt="img">
                                            </div>
                                            <p class="about-tab-text">Buscamos ser a academia líder, reconhecida pela
                                                excelência em atendimento, inovação em treinamentos e compromisso com o
                                                bem-estar integral de nossos membros. Queremos ser referência ao transcender
                                                o simples exercício físico, contribuindo significativamente para a qualidade
                                                de vida de nossa comunidade.</p>
                                        </div>
                                        <div class="filter-item cat3">
                                            <div class="about-tab-icon">
                                                <img src="assets/img/icon/about-icon.svg" alt="img">
                                            </div>
                                            <p class="about-tab-text">Nossa academia se compromete com a excelência,
                                                inovação e inclusão, proporcionando uma experiência acolhedora e
                                                capacitadora. Valorizamos a saúde holística, promovendo bem-estar físico,
                                                mental e emocional. Agimos com integridade, transparência e ética, dedicados
                                                ao sucesso e à saúde de nossos membros.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap mt-40">
                                <a href="about.html" class="btn">Marque uma consulta</a>
                                <div class="about-info-wrap">
                                    <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                    <div class="details">
                                        <p class="about-info-title">Precisa de ajuda</p>
                                        <a class="about-info-link" href="tel:+25825692582">55+ (11) 95063-XXXX</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
                                    Service Area 02
                                    ==============================-->
        <div class="service-area-2 space-bottom overflow-hidden">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title">Nossos serviços</span>
                    <h2 class="sec-title">Serviços oferecidos</h2>
                </div>
            </div>
            <div class="container">
                <div class="row global-carousel service-slider-2 slider-shadow" data-slide-show="3" data-ml-slide-show="3"
                    data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                    data-dots="false">
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
                                        Funcional</a></h4>
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
                                <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
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
                                <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
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
                                <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Meditação e
                                        Relaxamento</a></h4>
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
        <section class="cta-area space" data-bg-src="assets/img/my/sobre4.jpeg">
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
                                    Team Area
                                    ==============================-->
        <div class="team-area-1 space">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title">Nossos treinadores</span>
                    <h2 class="sec-title">Conheça nossos instrutores</h2>
                </div>
                <div class="row global-carousel team-slider-1 slider-shadow" data-slide-show="4" data-ml-slide-show="4"
                    data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                    data-center-mode="true">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/my/professores/professor1.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/my/professores/professor2.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/my/professores/professor3.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Harper Victoria</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/my/professores/professor4.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Andressa Cantos</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/my/professores/professor1.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/my/professores/professor2.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/my/professores/professor3.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Harper Victoria</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card">
                            <div class="team-card_img">
                                <img src="assets/img/my/professores/professor4.png" alt="img">
                            </div>
                            <div class="team-card_content">
                                <h4 class="team-card_title"><a href="team-details.html">Andressa Cantos</a>
                                </h4>
                                <span class="team-card_desig">CEO/Founder</span>
                                <div class="social-btn">
                                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
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
