@extends('layout.layout')

@section('tile', 'Contato')

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
        <div class="breadcumb-wrapper" data-bg-src="assets/img/my/contato/contatoBanner.png">
            <!-- bg animated image/ -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Contato</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index.html">HOME</a></li>
                                <li class="active">CONTATO</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--==============================
                            Contact Area
                        ==============================-->
        <div class="contact-area space bg-smoke2">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <img src="assets/img/icon/contact-icon1.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <span class="contact-info_title">WhatsApp</span>
                                <h6 class="contact-info_text"><a href="tel:9288006780">+55 (11) 95063-XXXX</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <img src="assets/img/icon/contact-icon2.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <span class="contact-info_title">E-mail</span>
                                <h6 class="contact-info_text"><a href="mailto:info@Fitmas.com">vivabem@gmail.com</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <img src="assets/img/icon/contact-icon3.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <span class="contact-info_title">Local</span>
                                <h6 class="contact-info_text"><a href="tel:9288006780">Rua cidade Nº1500</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-sec2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14636.309481399088!2d-46.42673326303491!3d-23.493722541570108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1700847868446!5m2!1spt-BR!2sbr"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="container">
            <div class="contact-form-area space-bottom">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="contact-form-thumb">
                            <img src="assets/img/my/contato/contatoMensagem.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-8 bg-smoke2">
                        <div class="contact-form-wrap">
                            <div class="title-area">
                                <span class="sub-title">CONTATO
                                </span>
                                <h2 class="sec-title">Nos envie uma mensagem</h2>
                            </div>
                            <form action="{{ route('contato.enviar') }}" method="POST" class="contact-form"
                                id="formContato">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-white" name="name"
                                                id="name" placeholder="Nome" value="{{ old('name') }}">
                                            <i class="far fa-user"></i>
                                            <div id="nomeContatoError" class="error-mensagem"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-white" name="email"
                                                id="email" placeholder="Email" value="{{ old('email') }}">
                                            <i class="far fa-envelope"></i>
                                            <div id="emailContatoError" class="error-mensagem"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-white" name="foneContato"
                                                id="foneContato" placeholder="Telefone" value="{{ old('foneContato') }}">
                                            <i class="far fa-envelope"></i>
                                            <div id="foneContatoError" class="error-mensagem"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select name="subject" id="subject" class="form-select style-white">
                                                <option value="{{ old('subject') }}" disabled="" selected=""
                                                    hidden="">Selecione o
                                                    assunto</option>
                                                <option value="Body Building">Body Building</option>
                                                <option value="Musculação">Musculação</option>
                                                <option value="three">Meditação</option>
                                                <option value="Meditação">Boxe</option>
                                                <option value="Outros">Outros</option>
                                            </select>
                                            <div id="subjectError" class="error-mensagem"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-12 btnEnviarContato">
                                    <textarea placeholder="Sua Mensagem" id="contactForm" class="form-control style-white">{{ old('contactForm') }}</textarea>
                                    <div id="contactFormError" class="error-mensagem"></div>
                                </div>

                                <div class="form-btn col-12">
                                    <button type="submit" value="Enviar Mensagem" class="btn"> enviar
                                        mensagem</button>
                                    <div id="contatoMensagem" class="msgContato"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-bottom">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title">Follow Our
                    </span>
                    <h2 class="sec-title">Instagram Feed</h2>
                </div>
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="portfolio-thumb">
                            <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed1.png"><i
                                    class="far fa-eye"></i></a>
                            <img decoding="async"
                                src="https://wptf.themepul.co/fitmas/wp-content/uploads/2023/07/insta_feed1.png"
                                alt="portfolio">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="portfolio-thumb">
                            <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed2.png"><i
                                    class="far fa-eye"></i></a>
                            <img decoding="async"
                                src="https://wptf.themepul.co/fitmas/wp-content/uploads/2023/07/insta_feed2.png"
                                alt="portfolio">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="portfolio-thumb">
                            <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed3.png"><i
                                    class="far fa-eye"></i></a>
                            <img decoding="async"
                                src="https://wptf.themepul.co/fitmas/wp-content/uploads/2023/07/insta_feed3.png"
                                alt="portfolio">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="portfolio-thumb">
                            <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed4.png"><i
                                    class="far fa-eye"></i></a>
                            <img decoding="async"
                                src="https://wptf.themepul.co/fitmas/wp-content/uploads/2023/07/insta_feed4.png"
                                alt="portfolio">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="portfolio-thumb">
                            <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed5.png"><i
                                    class="far fa-eye"></i></a>
                            <img decoding="async"
                                src="https://wptf.themepul.co/fitmas/wp-content/uploads/2023/07/insta_feed5.png"
                                alt="portfolio">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="portfolio-thumb">
                            <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed6.png"><i
                                    class="far fa-eye"></i></a>
                            <img decoding="async"
                                src="https://wptf.themepul.co/fitmas/wp-content/uploads/2023/07/insta_feed6.png"
                                alt="portfolio">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="portfolio-thumb">
                            <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed7.png"><i
                                    class="far fa-eye"></i></a>
                            <img decoding="async"
                                src="https://wptf.themepul.co/fitmas/wp-content/uploads/2023/07/insta_feed7.png"
                                alt="portfolio">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="portfolio-thumb">
                            <a class="popup-image icon-btn" href="assets/img/instagram/insta_feed8.png"><i
                                    class="far fa-eye"></i></a>
                            <img decoding="async"
                                src="https://wptf.themepul.co/fitmas/wp-content/uploads/2023/07/insta_feed8.png"
                                alt="portfolio">
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
