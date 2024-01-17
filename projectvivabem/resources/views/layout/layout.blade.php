<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Viva Bem</title>
    <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon.png') }}">
    {{-- <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}"> --}}
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    {{-- TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="{{ asset('assets/css/font.css') }}" rel="stylesheet"> --}}

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/theme-support.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.flipster.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>


    {{-- <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ '/sobre' }}">Sobre</a></li>
            <li><a href="{{ '/modalidade' }}">Modalidade</a></li>
            <li><a href="{{ '/treino' }}">Treino</a></li>
            <li><a href="{{ '/noticias' }}">Noticia</a></li>
            <li><a href="{{ '/contato' }}">Contato</a></li>
        </ul>
    </nav> --}}

    <!--==============================
         Preloader
        ==============================-->
    <div class="preloader ">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img src="assets/img/logoVivaBem.svg" alt="Fitmas"></a>
                    </div>
                    <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma
                        instalação dedicada à aptidão física e ao exercício, e normalmente oferece uma
                        variedade</p>
                    <div class="social-btn">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Quick Links</h3>
                <ul class="menu">
                    <li><a href="about.html">Sobre nós</a></li>
                    <li><a href="project-details.html">Nossa missao</a></li>
                    <li><a href="team.html">Conheça nosso time</a></li>
                    <li><a href="project.html">Nossos projetos</a></li>
                    <li><a href="contact.html">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
        Mobile Menu
        ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logoVivaBem.svg" alt="VivaBem" style="width: 60%"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('sobre') }}">Sobre</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="team.html">Team Page</a></li>
                            <li><a href="team-2.html">Team Page 02</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="gallery.html">Gallery Page</a></li>
                            <li><a href="gallery-2.html">Gallery Page 02</a></li>
                            <li><a href="project.html">Project Page</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                            <li><a href="shop.html">Shop Page</a></li>
                            <li><a href="shop-details.html">Shop Details</a></li>
                            <li><a href="pricing.html">Pricing Page</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ asset('modalidade') }}">Modalidade</a>
                        <ul class="sub-menu">
                            <li><a href="service-details.html">Musculação</a></li>
                            <li><a href="service-details.html">Treinos HIT</a></li>
                            <li><a href="service-details.html">Treinamento Funcional</a></li>
                            <li><a href="service-details.html">Boxe</a></li>
                            <li><a href="service-details.html">Yoga e Pilates</a></li>
                            <li><a href="service-details.html">Meditação e Relaxamento</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ asset('noticias') }}">Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
     Header Area
        ==============================-->
    <header class="nav-header header-layout2">
        <div class="header-top d-lg-block d-none">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-envelope"></i><a
                                        href="pedrovischisoares@gmail.com">academiavivabem@gmail.com</a></li>
                                <li><i class="far fa-clock"></i>Seg - Sab: 8.00-19.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <span class="me-3">Visite nossas paginas sociais</span>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.html"><img src="assets/img/logoVivaBem.svg" style="width: 60%"
                                        alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto m-lg-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="{{ asset('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('sobre') }}">Sobre</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ asset('modalidade') }}">Modalidade</a>
                                        <ul class="sub-menu">
                                            <li><a href="service-details.html">Musculação</a></li>
                                            <li><a href="service-details.html">Treinos HIT</a></li>
                                            <li><a href="service-details.html">Treinamento Funcional</a></li>
                                            <li><a href="service-details.html">Boxe</a></li>
                                            <li><a href="service-details.html">Yoga e Pilates</a></li>
                                            <li><a href="service-details.html">Meditação e Relaxamento</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Paginas</a>
                                        <ul class="sub-menu">
                                            <li><a href="team.html">Team Page</a></li>
                                            <li><a href="team-2.html">Team Page 02</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                            <li><a href="gallery.html">Gallery Page</a></li>
                                            <li><a href="gallery-2.html">Gallery Page 02</a></li>
                                            <li><a href="project.html">Project Page</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                            <li><a href="shop.html">Shop Page</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                            <li><a href="pricing.html">Pricing Page</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li {{-- class="menu-item-has-children" --}}>
                                        <a href="{{ asset('noticias') }}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contato') }}">Conato</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i
                                        class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-xxl-block d-none">
                            <div class="navbar-right-desc">
                                <i class="fas fa-phone-volume"></i><a href="tel:+2590256215">+55 (11) 95063-XXXX</a>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href="contact.html" class="btn style2 style-r0 d-xl-block d-none">
                                    Marque uma consulta
                                </a>
                                <button type="button" class="btn style-r0 btn-border3 sideMenuToggler">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('conteudo')
    </main>


    <!--==============================
            Footer Area
        ==============================-->
    <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer-1-bg.png">
        @yield('rodape')

        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logoVivaBem.svg" alt="Fitmas"></a>
                                </div>
                                <p class="about-text">
                                    Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma
                                    instalação dedicada à aptidão física e ao exercício, e normalmente oferece uma
                                    variedade
                                </p>
                                <div class="social-btn">
                                    <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/" tabindex="0"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/" tabindex="0"><i
                                            class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Links rápidos</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.html">Sobre Nós</a></li>
                                    <li><a href="service-details.html">Nossa missao</a></li>
                                    <li><a href="team.html">Conheça nosso time</a></li>
                                    <li><a href="project.html">Nossos projetos</a></li>
                                    <li><a href="contact.html">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Galeria</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="assets/img/my/galeria.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed1.png" class="gallery-btn popup-image"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/my/galeria2.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed2.png" class="gallery-btn popup-image"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/my/galeria3.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed3.png" class="gallery-btn popup-image"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/my/galeria4.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed4.png" class="gallery-btn popup-image"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/my/galeria5.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed5.png" class="gallery-btn popup-image"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/my/galeria6.png" alt="Gallery Image">
                                    <a href="assets/img/widget/insta-feed6.png" class="gallery-btn popup-image"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Receber novidades</h3>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input class="form-control" type="email" placeholder="Email"
                                        required="">
                                </div>
                                <button type="submit" class="btn style-r0 style2">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto align-self-center">
                        <p class="copyright-text text-center">© 2023 <a href="#">VivaBem.</a> All Rights
                            Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <h2>VISCHI 2023 - SENAC SMP</h2> --}}
    </footer>

    <!--==============================
        All Js File
        ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Flip Slider -->
    <script src="{{ asset('assets/js/jquery.flipster.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('assets/js/bmi.calculator.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- Script --}}
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
