@extends('layout.layout')

@section('tile', 'Noticias')

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
        {{-- <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Our Blogs</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">BLOG PAGE</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}


        <div class="breadcumb-wrapper">
            <video class="bg-video" autoplay muted loop>
                <source src="assets/img/my/video/academia.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Viva Blog</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index.html">HOME</a></li>
                                <li class="active">BLOG</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================
                            Blog Area
                            ==============================-->
        <section class="blog-area space-top space-extra-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-lg-7">
                        <div class="blog-card style4">
                            <div class="blog-img">
                                <img src="assets/img/my/blog/blog1.png" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-clock"></i> 25 Junho, 2023</a>
                                    <a href="blog.html"><i class="far fa-user"></i>Post by: Pedro Vischi</a>
                                </div>
                                <h3 class="blog-title"><a href="blog-details.html">Os Benefícios da Beta Alanina para o
                                        Desempenho Físico e Resistência Muscular</a></h3>
                                <p>A beta alanina é um aminoácido que demonstrou melhorar o desempenho físico e aumentar a
                                    resistência muscular. Ao ser convertida em carnosina, ajuda a reduzir a fadiga muscular
                                    durante exercícios de alta intensidade, promovendo uma recuperação mais rápida.</p>
                                <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> Ler
                                    mais</a>
                            </div>
                        </div>
                        <div class="blog-card style4">
                            <div class="blog-img">
                                <img src="assets/img/my/blog/blog2.png" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-clock"></i> 25 June, 2023</a>
                                    <a href="blog.html"><i class="far fa-user"></i>Post by: Admin</a>
                                </div>
                                <h3 class="blog-title"><a href="blog-details.html">Nutrição Balanceada: A Chave para uma
                                        Vida Mais Saudável e Energética</a></h3>
                                <p>Uma dieta equilibrada é essencial para a saúde geral, fornecendo nutrientes essenciais
                                    para o corpo funcionar adequadamente. Priorizar alimentos ricos em nutrientes, como
                                    frutas, vegetais, proteínas magras e grãos integrais, contribui para a energia,
                                    imunidade e saúde mental.</p>
                                <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> LER
                                    MAIS</a>
                            </div>
                        </div>
                        <div class="blog-card style4">
                            <div class="blog-img">
                                <img src="assets/img/my/blog/blog3.png" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-clock"></i> 25 June, 2023</a>
                                    <a href="blog.html"><i class="far fa-user"></i>Post by: Admin</a>
                                </div>
                                <h3 class="blog-title"><a href="blog-details.html">Cardio: Energize Seu Corpo e Fortaleça
                                        Seu Coração</a></h3>
                                <p>As atividades cardiovasculares são fundamentais para manter a saúde do coração, aumentar
                                    a resistência, queimar calorias e fortalecer os músculos. Engajar-se em exercícios
                                    cardiovasculares regularmente, como corrida, ciclismo ou natação, melhora a circulação
                                    sanguínea, reduz o risco de doenças cardíacas e promove o bem-estar mental. </p>
                                <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> LER
                                    MAIS</a>
                            </div>
                        </div>
                        <div class="pagination">
                            <ul>
                                <li><a href="{{ asset('noticias') }}">1</a></li>
                                <li><a href="{{ asset('noticias') }}">2</a></li>
                                <li><a href="{{ asset('noticias') }}">3</a></li>
                                <li><a href="{{ asset('noticias') }}"><i class="fas fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-lg-5">
                        <aside class="sidebar-area">
                            <div class="widget widget_search">
                                <form class="search-form">
                                    <input type="text" placeholder="Enter Keyword">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>

                            <div class="widget">
                                <h3 class="widget_title">Posts recentes</h3>
                                <div class="recent-post-wrap">
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="blog-details.html"><img src="assets/img/my/blog/blog4.png"
                                                    alt="Blog Image"></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit"
                                                    href="blog-details.html">Estratégias essenciais para maximizar o seu
                                                    treino</a>
                                            </h4>
                                            <div class="recent-post-meta">
                                                <a href="blog.html">25 Jun, 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="blog-details.html"><img src="assets/img/my/blog/blog5.png"
                                                    alt="Blog Image"></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit"
                                                    href="blog-details.html">Treinamento funcional dentro da sua rotina</a>
                                            </h4>
                                            <div class="recent-post-meta">
                                                <a href="blog.html">25 Jun, 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="blog-details.html"><img src="assets/img/my/blog/blog6.png"
                                                    alt="Blog Image"></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">
                                                    Dicas de Nutrição para frequentadores de academia</a></h4>
                                            <div class="recent-post-meta">
                                                <a href="blog.html">25 Jun, 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget widget_categories">
                                <h3 class="widget_title">Categorias</h3>
                                <ul>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Boxe</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Body Building</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Meditação</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Yoga</a>
                                    </li>
                                    <li>
                                        <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>CrossFit</a>
                                    </li>
                                </ul>
                            </div>

                            {{-- <div class="widget widget_gallery">
                                <h3 class="widget_title">Project Gallery</h3>
                                <div class="insta-feed">
                                    <a href="blog.html"><img src="assets/img/widget/widget1-1.png" alt="img">
                                        <i class="fab fa-instagram"></i></a>
                                    <a href="blog.html"><img src="assets/img/widget/widget1-2.png" alt="img">
                                        <i class="fab fa-instagram"></i></a>
                                    <a href="blog.html"><img src="assets/img/widget/widget1-3.png" alt="img">
                                        <i class="fab fa-instagram"></i></a>
                                    <a href="blog.html"><img src="assets/img/widget/widget1-4.png" alt="img">
                                        <i class="fab fa-instagram"></i></a>
                                    <a href="blog.html"><img src="assets/img/widget/widget1-5.png" alt="img">
                                        <i class="fab fa-instagram"></i></a>
                                    <a href="blog.html"><img src="assets/img/widget/widget1-6.png" alt="img">
                                        <i class="fab fa-instagram"></i></a>
                                </div>
                            </div> --}}

                            <div class="widget widget_tag_cloud">
                                <h3 class="widget_title">Tags mais procuradas</h3>
                                <div class="tagcloud">
                                    <a href="blog.html">CONSELHOS</a>
                                    <a href="blog.html">FIT</a>
                                    <a href="blog.html">SUPLEMENTO</a>
                                    <a href="blog.html">FAMILÍA</a>
                                    <a href="blog.html">VivaBem</a>
                                    <a href="blog.html">SAÚDE</a>
                                    <a href="blog.html">FITNESS</a>
                                    <a href="blog.html">GYM</a>
                                    <a href="blog.html">JULGAMENTO</a>
                                    <a href="blog.html">SOLUÇÕES</a>
                                    <a href="blog.html">TRAINOS</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>

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
