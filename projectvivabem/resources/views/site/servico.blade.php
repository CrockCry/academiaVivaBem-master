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
                        <h1 class="breadcumb-title">Our Services</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">HOME</a></li>
                            <li class="active">SERVICE</li>
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
                            <h4 class="service-card_title h5"><a href="service-details.html">Gym Fitness Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Power Lifting</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Body Building</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-4.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Boxing Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-5.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Yoga Fitness Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="assets/img/icon/service-icon_2-6.svg" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="service-details.html">Meditation Class</a></h4>
                            <p class="service-card_text">High-intensity workouts that alternate between intense bursts of exercise and
                                short recovery periods...</p>
                            <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area space" data-bg-src="assets/img/bg/cta-bg1.png">
        <div class="container">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="cta-wrap text-center text-lg-start">
                        <div class="title-area">
                            <span class="sub-title">Make An Appointment</span>
                            <h2 class="sec-title text-white">Get a Free Consultancy
                                Right Now Here!</h2>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn style2">Make Appointment</a>
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title text-white">Need Help?</p>
                                    <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
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
                <h3 class="sub-title">Pricing Plan</h3>
                <h2 class="sec-title">Our Pricing Plan</h2>
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
                        <h3 class="pricing-card_title">Basic Membership</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>19<span class="duration">/month</span>
                        </h4>
                        <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 trainings</li>
                                <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                                <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                                <li><i class="far fa-check-circle"></i>Free parking</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Choose This Plan</a>
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
                        <h3 class="pricing-card_title">Standard Membeship</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>39<span class="duration">/month</span>
                        </h4>
                        <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 trainings</li>
                                <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                                <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                                <li><i class="far fa-check-circle"></i>Free parking</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Choose This Plan</a>
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
                        <h3 class="pricing-card_title">Ultimate Membership</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>69<span class="duration">/month</span>
                        </h4>
                        <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 trainings</li>
                                <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                                <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                                <li><i class="far fa-check-circle"></i>Free parking</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="pricing.html">Choose This Plan</a>
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
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

</body>

</html>

@endsection
