@extends('layout.layout')

@section('tile', 'Home')

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
                                    Hero Area
                                    ==============================-->
        <div class="hero-wrapper hero-2" id="hero">
            <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
                data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true"
                data-xl-arrows="true" data-ml-arrows="true">
                <div class="hero-slider" data-bg-src="assets/img/my/banner1.png">
                    <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                        <img src="assets/img/hero/hero_shape_3-1.png" alt="img">
                    </div>
                    <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                        <img src="assets/img/hero/hero_shape_3-2.png" alt="img">
                    </div>
                    <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                        <img src="assets/img/hero/hero_shape_3-3.png" alt="img">
                    </div>
                    <div class="container">
                        <div class="row justify-content-lg-end justify-content-center">
                            <div class="col-xl-6 col-lg-7 col-md-9">
                                <div class="hero-style2">
                                    <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Aumente
                                        sua</span>
                                    <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Força
                                    </h1>
                                    <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">COM
                                        Viva Bem</span>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                        <a href="contact.html" class="btn style-r0 style2">Fale conosco</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slider" data-bg-src="assets/img/my/banner2.png">
                    <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                        <img src="assets/img/hero/hero_shape_3-1.png" alt="img">
                    </div>
                    <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                        <img src="assets/img/hero/hero_shape_3-2.png" alt="img">
                    </div>
                    <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                        <img src="assets/img/hero/hero_shape_3-3.png" alt="img">
                    </div>
                    <div class="container">
                        <div class="row justify-content-lg-end justify-content-center">
                            <div class="col-xl-6 col-lg-7 col-md-9">
                                <div class="hero-style2">
                                    <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Aumente
                                        sua</span>
                                    <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Força
                                    </h1>
                                    <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">COM
                                        Viva Bem</span>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                        <a href="contact.html" class="btn style-r0 style2">Fale conosco</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-arrow">
                <button data-slick-prev="#heroSlider2" class="slick-arrow slick-prev">PREV</button>
                <button data-slick-next="#heroSlider2" class="slick-arrow slick-next">NEXT</button>
            </div>
        </div>
        <!--======== / Hero Section ========-->

        <!--==============================
                                    Service Area
                                    ==============================-->
        <div class="service-bg2-area" data-bg-src="assets/img/bg/service-bg2.png">
            <!--==============================
                                        BMI Area
                                        ==============================-->
            <div class="bmi-area-1 space">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            <div class="title-area mb-30">
                                <span class="sub-title">Verifique seu IMC</span>
                                <h2 class="sec-title text-white fw-semibold">Indice de massa coporal</h2>
                                <p class="sec-text">O Índice de Massa Corporal (IMC) é uma ferramenta amplamente utilizada
                                    para avaliar o peso corporal em relação à altura. Ele pode fornecer uma indicação geral
                                    se um indivíduo se encontra dentro de uma faixa saudável de peso.p>
                            </div>
                            <div class="bmi-table mb-lg-0 mb-40">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">IMC</th>
                                            <th scope="col">STATUS DE PESO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Abaixo de 18.5</th>
                                            <td>Abaixo do peso</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">18.5 - 24.9</th>
                                            <td>Peso ideal</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">25.0 - 29.9</th>
                                            <td>Acima do peso</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">30.0 - Acima</th>
                                            <td>Obeso </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-end">
                            <div class="bmi-calculator-form">
                                <h4 class="form-title">Book Your Seat:</h4>
                                <form class="bmi-form" id="form" name="bmiCalc">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input for="weight" class="form-control style-border"
                                                    placeholder="Peso / KG" type="text" name="weight">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input for="height" class="form-control style-border"
                                                    placeholder="Altura / CM" type="text" name="height">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control style-border" name="age"
                                                    id="age" placeholder="Idade">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control style-border" name="sex"
                                                    id="sex" placeholder="Sexo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input for="bmi_result" class="form-control style-border" placeholder="Seu IMC"
                                            type="text" name="bmi">
                                    </div>
                                    <div class="form-group">
                                        <input for="bmi_message" placeholder="Conclusão"
                                            class="form-control style-border" type="text" name="meaning">
                                    </div>
                                    <div class="btn style3">
                                        <input type="button" value="Calucular IMC" onClick="calculateBMI()">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--==============================
                                        Service Area 01
                                        ==============================-->
            <div class="service-area-1 space-bottom overflow-hidden">
                <div class="container">
                    <div class="title-area">
                        <span class="sub-title">RECURSOS</span>
                        <h2 class="sec-title text-white fw-semibold">SERVIÇOS OFERECIDOS</h2>
                    </div>
                </div>
                <div class="container-fluid p-0">
                    <div class="row global-carousel service-slider-1 style2" data-slide-show="4" data-ml-slide-show="3"
                        data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                        data-dots="false">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-1.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Diversos
                                            equipamentos</a>
                                    </h4>
                                    <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque
                                        sagittis</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Read More <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-2.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Cardio</a>
                                    </h4>
                                    <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque
                                        sagittis</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Read More <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-3.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Batimentos
                                            cardiacos</a>
                                    </h4>
                                    <p class="service-card_text">Maquinas equipadas com monitoramento cardiaco</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Read More <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-4.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Strength Training</a>
                                    </h4>
                                    <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque
                                        sagittis</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Read More <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-1.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Tons of Equipment</a>
                                    </h4>
                                    <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque
                                        sagittis</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Read More <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-2.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Rows of Cardio</a>
                                    </h4>
                                    <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque
                                        sagittis</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Read More <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-3.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Heart Pumping</a>
                                    </h4>
                                    <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque
                                        sagittis</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Read More <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-4.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Strength Training</a>
                                    </h4>
                                    <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque
                                        sagittis</p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Read More <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="sec-shape2-bottom">
                <img src="assets/img/bg/sec-shape2-top.png" alt="img">
            </div>
        </div>

        <!--==============================
                                    schedule Area
                                    ==============================-->
        <div class="schedule-area-1 space">
            <div class="container container2">
                <div class="title-area text-center">
                    <span class="sub-title">Nossas aulas</span>
                    <h2 class="sec-title fw-semibold">NOSSO CRONOGRAMA DE TREINAMENTO</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="schedule-tab-1">
                            <div class="filter-menu-active mb-50 text-center">
                                <button data-filter=".cat1" class="active btn style4 style-r0" type="button">ALL
                                    EVENTS</button>
                                <button class="btn style4 style-r0" data-filter=".cat2" type="button">CARDIO</button>
                                <button class="btn style4 style-r0" data-filter=".cat3" type="button">OPEN GYM</button>
                                <button class="btn style4 style-r0" data-filter=".cat4" type="button">TOTAL
                                    BODY</button>
                                <button class="btn style4 style-r0" data-filter=".cat5" type="button">CROSSFIT</button>
                            </div>
                            <div class="filter-active-cat1">
                                <div class="filter-item cat1">
                                    <div class="table-responsive">
                                        <table class="schedule-table table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">MONDAY</th>
                                                    <th scope="col">TUESDAY</th>
                                                    <th scope="col">WEDNESDAY</th>
                                                    <th scope="col">THURSDAY</th>
                                                    <th scope="col">FRIDAY</th>
                                                    <th scope="col">SATURDAY</th>
                                                    <th scope="col">SUNDAY</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">06:00 - 07:00</th>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Body Build</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>CrossFit Pro</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Cardio Box</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">07:00 - 08:00</th>
                                                    <td></td>
                                                    <td class="active">
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Pro Intense
                                                            Workout</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">08:00 - 09:00</th>
                                                    <td>
                                                        <span>Pump Work</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2"></td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2">
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">09:00 - 10:00</th>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Yoga Class</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">10:00 - 11:00</th>
                                                    <td>
                                                        <span>Body Build</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Pump Work</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Yoga Class</span>
                                                        Daniel
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="filter-item cat2">
                                    <div class="table-responsive">
                                        <table class="schedule-table table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">MONDAY</th>
                                                    <th scope="col">TUESDAY</th>
                                                    <th scope="col">WEDNESDAY</th>
                                                    <th scope="col">THURSDAY</th>
                                                    <th scope="col">FRIDAY</th>
                                                    <th scope="col">SATURDAY</th>
                                                    <th scope="col">SUNDAY</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">06:00 - 07:00</th>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Body Build</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>CrossFit Pro</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Cardio Box</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">07:00 - 08:00</th>
                                                    <td></td>
                                                    <td class="active">
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Pro Intense <br>
                                                            Workout</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">08:00 - 09:00</th>
                                                    <td>
                                                        <span>Pump Work</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2"></td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2">
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">09:00 - 10:00</th>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Yoga Class</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">10:00 - 11:00</th>
                                                    <td>
                                                        <span>Body Build</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Pump Work</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Yoga Class</span>
                                                        Daniel
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="filter-item cat3">
                                    <div class="table-responsive">
                                        <table class="schedule-table table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">MONDAY</th>
                                                    <th scope="col">TUESDAY</th>
                                                    <th scope="col">WEDNESDAY</th>
                                                    <th scope="col">THURSDAY</th>
                                                    <th scope="col">FRIDAY</th>
                                                    <th scope="col">SATURDAY</th>
                                                    <th scope="col">SUNDAY</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">06:00 - 07:00</th>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Body Build</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>CrossFit Pro</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Cardio Box</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">07:00 - 08:00</th>
                                                    <td></td>
                                                    <td class="active">
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Pro Intense
                                                            Workout</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">08:00 - 09:00</th>
                                                    <td>
                                                        <span>Pump Work</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2"></td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2">
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">09:00 - 10:00</th>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Yoga Class</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">10:00 - 11:00</th>
                                                    <td>
                                                        <span>Body Build</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Pump Work</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Yoga Class</span>
                                                        Daniel
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="filter-item cat4">
                                    <div class="table-responsive">
                                        <table class="schedule-table table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">MONDAY</th>
                                                    <th scope="col">TUESDAY</th>
                                                    <th scope="col">WEDNESDAY</th>
                                                    <th scope="col">THURSDAY</th>
                                                    <th scope="col">FRIDAY</th>
                                                    <th scope="col">SATURDAY</th>
                                                    <th scope="col">SUNDAY</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">06:00 - 07:00</th>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Body Build</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>CrossFit Pro</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Cardio Box</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">07:00 - 08:00</th>
                                                    <td></td>
                                                    <td class="active">
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Pro Intense
                                                            Workout</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">08:00 - 09:00</th>
                                                    <td>
                                                        <span>Pump Work</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2"></td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2">
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">09:00 - 10:00</th>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Yoga Class</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">10:00 - 11:00</th>
                                                    <td>
                                                        <span>Body Build</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Pump Work</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Yoga Class</span>
                                                        Daniel
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="filter-item cat5">
                                    <div class="table-responsive">
                                        <table class="schedule-table table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">MONDAY</th>
                                                    <th scope="col">TUESDAY</th>
                                                    <th scope="col">WEDNESDAY</th>
                                                    <th scope="col">THURSDAY</th>
                                                    <th scope="col">FRIDAY</th>
                                                    <th scope="col">SATURDAY</th>
                                                    <th scope="col">SUNDAY</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">06:00 - 07:00</th>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Body Build</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>CrossFit Pro</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Cardio Box</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">07:00 - 08:00</th>
                                                    <td></td>
                                                    <td class="active">
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Pro Intense
                                                            Workout</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">08:00 - 09:00</th>
                                                    <td>
                                                        <span>Pump Work</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2"></td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2">
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">09:00 - 10:00</th>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Yoga Class</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Boxing Gym</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">10:00 - 11:00</th>
                                                    <td>
                                                        <span>Body Build</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Pump Work</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Fitness Class</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Open Gym</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Yoga Class</span>
                                                        Daniel
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
                                    Video Area
                                    ==============================-->
        <div class="video-area-1">
            <div class="container">
                <div class="video-wrap">
                    <a data-bg-src="assets/img/my/video/imgVideo.png" href="https://www.youtube.com/watch?v=wLt60dCvLx4"
                        class="play-btn popup-video">
                        <i class="fa-sharp fa-solid fa-play"></i>
                    </a>
                </div>
            </div>
        </div>

        <!--==============================
                                    Portfolio Area
                                    ==============================-->
        <div class="portfolio-area-1" data-bg-src="assets/img/bg/portfolio-bg-1.png">
            {{--

            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title">Our Portfolio</span>
                    <h2 class="sec-title text-white fw-semibold">OUR WORK PORTFOLIO</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="flip-gallery-area">
                    <div class="flip-gallery">
                        <ul class="flip-items">
                            <li>
                                <div class="gallery-card gallery-flip">
                                    <div class="gallery-img">
                                        <img src="assets/img/project/project1_1.png" alt="gallery image">
                                    </div>
                                    <div class="gallery-content">
                                        <div class="media-left">
                                            <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                            <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                                        </div>
                                        <a href="assets/img/project/project1_1.png" class="icon-btn popup-image">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="gallery-card gallery-flip">
                                    <div class="gallery-img">
                                        <img src="assets/img/project/project1_2.png" alt="gallery image">
                                    </div>
                                    <div class="gallery-content">
                                        <div class="media-left">
                                            <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                            <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                                        </div>
                                        <a href="assets/img/project/project1_2.png" class="icon-btn popup-image">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="gallery-card gallery-flip">
                                    <div class="gallery-img">
                                        <img src="assets/img/project/project1_3.png" alt="gallery image">
                                    </div>
                                    <div class="gallery-content">
                                        <div class="media-left">
                                            <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                            <h4 class="gallery-content_title">Cockfights Rumble Fitness Training</h4>
                                        </div>
                                        <a href="assets/img/project/project1_3.png" class="icon-btn popup-image">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
         --}}

            <div class="wcu-area-1 space-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="wcu-thumb">
                                <img class="img-1" src="assets/img/my/choose/escolha1.png" alt="img">
                                <div class="img-2 jump">
                                    <img src="assets/img/my/choose/escolha2.png" alt="img">
                                </div>
                                <div class="wcu-grid jump2">
                                    <div class="icon">
                                        <img src="assets/img/icon/wcu-icon_1-1.svg" alt="img">
                                    </div>
                                    <div class="details">
                                        <h3 class="wcu-grid_year"><span class="counter-number">25</span>+</h3>
                                        <span class="wcu-grid_text">Anos de experiencia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="wcu-wrap">
                                <div class="title-area mb-50">
                                    <span class="sub-title">Por que escolher a VIVA BEM?</span>
                                    <h2 class="sec-title text-white">Por que a VIVA BEM?</h2>
                                    <p class="sec-text text-white">Veja alguns dos motivos de porque a VivaBem é a melhor
                                        opção para você</p>
                                </div>
                                <div class="accordion-area accordion" id="faqAccordion">

                                    <div class="accordion-card active">
                                        <div class="accordion-header" id="collapse-item-1">
                                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="true"
                                                aria-controls="collapse-1"> Quais são os horários de funcionamento da sua
                                                academia?</button>
                                        </div>
                                        <div id="collapse-1" class="accordion-collapse collapse show"
                                            aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Nossa adesão padrão oferece acesso às instalações da
                                                    academia durante os horários regulares de funcionamento. Esta opção é
                                                    ideal para pessoas que preferem treinar de forma independente e desejam
                                                    aproveitar os equipamentos do nosso estado.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-card ">
                                        <div class="accordion-header" id="collapse-item-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                                aria-expanded="false" aria-controls="collapse-2"> Quais comodidades e
                                                instalações sua academia oferece?</button>
                                        </div>
                                        <div id="collapse-2" class="accordion-collapse collapse "
                                            aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Nossa academia oferece uma variedade de comodidades e
                                                    instalações para atender às necessidades dos nossos clientes. Temos uma
                                                    ampla gama de equipamentos de última geração para treino cardiovascular
                                                    e de musculação.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-card ">
                                        <div class="accordion-header" id="collapse-item-3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                                aria-expanded="false" aria-controls="collapse-3"> Voces oferecem servico
                                                com personal trainer?</button>
                                        </div>
                                        <div id="collapse-3" class="accordion-collapse collapse "
                                            aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Sim, oferecemos serviços de personal training para os
                                                    nossos clientes. Nossos treinadores pessoais são profissionais
                                                    qualificados e experientes que podem criar programas de treinamento
                                                    personalizados com base nos seus objetivos específicos de fitness.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!--==============================
                                    wcu area
                                    ==============================-->
        <div class="wcu-area-2 space">
            <div class="container container2">
                <div class="row justify-content-between">
                    <div class="col-xl-6 align-self-center order-xl-2">
                        <div class="wcu-thumb-wrap ms-xl-5 mb-xl-0 mb-40">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="wcu-thumb2">
                                        <img src="assets/img/my/suport1.png" alt="img">
                                    </div>
                                    <div class="wcu-grid2 mt-4" data-bg-src="assets/img/bg/wcu_box-bg.png">
                                        <div class="details">
                                            <span class="wcu-grid_text"> MAIS DE <span class="counter-number">15000</span>
                                                ESTUDANTES SATISFEITOS</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="wcu-grid2 mb-4 mt-sm-0 mt-4 bg-theme">
                                        <div class="details">
                                            <span class="wcu-grid_text"> MAIS DE <span class="counter-number">25</span>
                                                Anos de experiencia</span>
                                        </div>
                                    </div>
                                    <div class="wcu-thumb2">
                                        <img src="assets/img/my/suport2.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 order-xl-1">
                        <div class="title-area">
                            <span class="sub-title">Por que escolher a VivaBem?</span>
                            <h2 class="sec-title fw-semibold">VAMOS PROVIDENCIAR <br> 100% DE NOSSO SUPORTE PARA SEU TRENO
                            </h2>
                            <p class="sec-text">
                                Defina seus objetivos específicos de musculação. Determine o que você deseja alcançar em
                                termos de tamanho muscular, força e aparência física geral. Estabeleça metas realistas e
                                mensuráveis que irão orientar seu plano de treino e nutrição.</p>
                            <div class="about-grid-wrap mt-40">
                                <div class="about-grid style2">
                                    <div class="about-grid_icon">
                                        <img src="assets/img/icon/wcu-icon_2-1.svg" alt="img">
                                    </div>
                                    <div class="about-grid_content">
                                        <h4 class="about-grid_title">Treinadores profissionais</h4>
                                        <p class="about-grid_text">Diversos treinadores a disponibilidade</p>
                                    </div>
                                </div>
                                <div class="about-grid style2">
                                    <div class="about-grid_icon">
                                        <img src="assets/img/icon/wcu-icon_2-2.svg" alt="img">
                                    </div>
                                    <div class="about-grid_content">
                                        <h4 class="about-grid_title">Equipamentos modernos</h4>
                                        <p class="about-grid_text">Equipamentos Technogym</p>
                                    </div>
                                </div>
                            </div>
                            <p class="sec-text">
                                Implemente os princípios de sobrecarga progressiva em seu treinamento. Aumente gradualmente o peso, as repetições ou a intensidade dos seus exercícios ao longo do tempo.</p>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn style-r0">Marque uma consulta</a>
                            <div class="about-info-wrap style2">
                                <div class="icon"><i class="fas fa-phone"></i></div>
                                <div class="details">
                                    <p class="about-info-title">Contato</p>
                                    <a class="about-info-link" href="tel:+25825692582">+55 (11) 95063-XXXX</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================
                                        wcu area 02 end
                                    ==============================-->

        <div class="bg-img-sec" data-bg-src="assets/img/bg/team-bg-2.png">
            <!--==============================
                                        team area 02
                                        ==============================-->
            <div class="team-area-2 space overflow-hidden">
                <div class="container container2">
                    <div class="title-area text-center text-sm-start">
                        <span class="sub-title">NOSSA EQUIPE</span>
                        <h2 class="sec-title text-white fw-semibold">CONHECA SEU TREINADOR</h2>
                    </div>
                </div>
                <div class="container-fluid p-0">
                    <div class="row global-carousel team-slider-2" data-slide-show="4" data-ml-slide-show="3"
                        data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                        data-dots="false">
                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/my/professores/professor2.1.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">YOGA COACH</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+55 (11) 95063-XXXX</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/my/professores/professor2.2.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">YOGA COACH</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/my/professores/professor2.3.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">YOGA COACH</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/my/professores/professor2.4.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">YOGA COACH</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">Andressa Cantos</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/my/professores/professor2.1.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">YOGA COACH</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/my/professores/professor2.2.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">YOGA COACH</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/my/professores/professor2.3.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">YOGA COACH</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/my/professores/professor2.4.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">YOGA COACH</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">Andressa Cantos</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--==============================
                                        Counter Area
                                        ==============================-->
            <div class="counter-area-2 overflow-hidden">
                <div class="container container2">
                    <div class="row justify-content-between">
                        <div class="col-sm-6 col-xl-auto counter-card_wrap">
                            <div class="counter-card style2">
                                <div class="counter-card_icon">
                                    <img src="assets/img/icon/counter-icon_2-1.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h2 class="counter-card_number"><span class="counter-number">3658</span>+</h2>
                                    <p class="counter-card_text">Clientes satisfeitos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-auto counter-card_wrap">
                            <div class="counter-card style2">
                                <div class="counter-card_icon">
                                    <img src="assets/img/icon/counter-icon_2-2.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h2 class="counter-card_number"><span class="counter-number">658</span>+</h2>
                                    <p class="counter-card_text">Expert Members</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-auto counter-card_wrap">
                            <div class="counter-card style2">
                                <div class="counter-card_icon">
                                    <img src="assets/img/icon/counter-icon_2-3.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h2 class="counter-card_number"><span class="counter-number">368</span>+</h2>
                                    <p class="counter-card_text">Modern Equipment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-auto counter-card_wrap">
                            <div class="counter-card style2">
                                <div class="counter-card_icon">
                                    <img src="assets/img/icon/counter-icon_2-4.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h2 class="counter-card_number"><span class="counter-number">153</span>+</h2>
                                    <p class="counter-card_text"> Tons Of Harvest</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ad-slider">
                <div class="global-carousel" data-autoplay-speed="1" data-speed="10000">
                    <h2 class="ad-slider_title">Viva Bem <span>FITNESS</span> CENTER </h2>
                    <h2 class="ad-slider_title">Viva Bem <span>FITNESS</span> CENTER </h2>
                </div>
            </div>
        </div>

        <!--==============================
                                    Goal Area
                                    ==============================-->
        <section class="goal-area space">
            <div class="container container2">
                <div class="row">
                    <div class="col-lg-6 order-lg-2">
                        <div class="goal-thumb-2 mb-40 mb-lg-0">
                            <div class="img-1">
                                <img src="assets/img/my/home6.png" alt="img">
                            </div>
                            <div class="img-2 jump">
                                <img src="assets/img/my/home5.png" alt="img">
                            </div>
                            <div class="wcu-grid movingX">
                                <div class="icon">
                                    <img src="assets/img/icon/wcu-icon_1-1.svg" alt="img">
                                </div>
                                <div class="details">
                                    <h3 class="wcu-grid_year"><span class="counter-number">25</span>+</h3>
                                    <span class="wcu-grid_text">Years Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="title-area">
                            <span class="sub-title">Fitmas Goal
                            </span>
                            <h2 class="sec-title fw-semibold">DESBLOQUEIE TODO SEU POTENCIAL, ALCANCE SEUS GANHOS FITNES.
                            </h2>
                        </div>
                        <div class="goal-grid-wrap">
                            <div class="about-grid style3">
                                <div class="about-grid_icon">
                                    <img src="assets/img/icon/goal-icon_1-1.svg" alt="img">
                                </div>
                                <div class="about-grid_content">
                                    <h4 class="about-grid_title">Free Fitness Training</h4>
                                    <p class="about-grid_text">Pedal your way to fitness in our specialized indoor cycling
                                        studio. Equipped with stationary bikes...</p>
                                </div>
                            </div>
                            <div class="about-grid style3">
                                <div class="about-grid_icon">
                                    <img src="assets/img/icon/goal-icon_1-2.svg" alt="img">
                                </div>
                                <div class="about-grid_content">
                                    <h4 class="about-grid_title">Cardio and Strength</h4>
                                    <p class="about-grid_text">Pedal your way to fitness in our specialized indoor cycling
                                        studio. Equipped with stationary bikes...</p>
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a class="btn style-r0" href="service-details.html">Learn More</a>
                                <a class="btn btn-border style-r0" href="service-details.html">View All Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                    Blog Area
                                    ==============================-->
        <section class="blog-area-2 space">
            <div class="container container2">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 position-relative">
                        <div class="blog_sec_title_static me-lg-3">
                            <div class="blog_sec_title_wrap">
                                <div class="title-area">
                                    <span class="sub-title">Nossos posts
                                    </span>
                                    <h2 class="sec-title fw-semibold">VEJA NOSSAS ULTIMAS NOTICIAS</h2>
                                    <p class="sec-text">Bem vindo ao VivaBlog, onde compatilhamos dicas valiosas e
                                        inspirações para ajundar você na sua jornada de bem estar.</p>
                                </div>
                                <a class="btn style-r0" href="blog.html">Ver mais posts</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-6">
                        <div class="blog-card style2">
                            <div class="blog-img">
                                <img src="assets/img/my/equipamentos.png" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html">JUNE 15, 2023</a>
                                    <a href="blog.html">SHOPPING</a>
                                </div>
                                <h3 class="blog-title box-title"><a href="blog-details.html">Mastering the Machines: A
                                        Beginner's Guide
                                        to Gym Equipment</a></h3>
                                <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i>
                                    READ MORE</a>
                            </div>
                        </div>
                        <div class="blog-card style2">
                            <div class="blog-img">
                                <img src="assets/img/my/blog2.png" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html">JUNE 15, 2023</a>
                                    <a href="blog.html">SHOPPING</a>
                                </div>
                                <h3 class="blog-title box-title"><a href="blog-details.html">Mastering the Machines: A
                                        Beginner's Guide
                                        to Gym Equipment</a></h3>
                                <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i>
                                    READ MORE</a>
                            </div>
                        </div>
                        <div class="blog-card style2">
                            <div class="blog-img">
                                <img src="assets/img/my/blog3.png" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html">JUNE 15, 2023</a>
                                    <a href="blog.html">SHOPPING</a>
                                </div>
                                <h3 class="blog-title box-title"><a href="blog-details.html">Mastering the Machines: A
                                        Beginner's Guide
                                        to Gym Equipment</a></h3>
                                <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i>
                                    READ MORE</a>
                            </div>
                        </div>
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
