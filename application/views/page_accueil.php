<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="parallax one page" />
    <meta name="keyword" content="agency, business, corporate, creative, freelancer, interior, joomla template, K2 Blog, minimal, modern, multipurpose, personal, portfolio, responsive, simple" />

    <!--  Title -->
    <title>Onirix - IA </title>

    <!-- Font Google -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500&family=Poppins:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    </noscript>

    <link rel="shortcut icon" href=<?php echo site_url("assets/img/onirix-blanc.png") ?> type="image/x-icon" />
    <link rel="icon" href=<?php echo site_url("assets/img/onirix-blanc.png") ?> type="image/x-icon" />

    <!-- custom styles (optional) -->
    <link href=<?php echo site_url("assets/css/plugins.css") ?> rel="stylesheet" />
    <link href=<?php echo site_url("assets/css/style.css") ?> rel="stylesheet" />
</head>

<!--classic-menu-->

<body class="v-dark dsn-effect-scroll dsn-cursor-effect dsn-ajax">

    <!-- ========== Loading Page ========== -->
    <div class="preloader">
        <span class="percent v-middle">0</span>
        <span class="loading-text text-uppercase">Loading ...</span>
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>
        <h1 class="title v-middle">
            <span class="letter-stroke">Onirix</span>
            <span class="text-fill">Onirix</span>
        </h1>
    </div>
    <!-- ========== End Loading Page ========== -->

    <!-- ========== Menu ========== -->
    <div class="site-header dsn-load-animate dsn-container">
        <div class="extend-container d-flex w-100 align-items-baseline justify-content-between align-items-end">
            <div class="inner-header p-relative">
                <div class="main-logo">
                    <a href="<?php echo base_url("/");?>" data-dsn="parallax">
                        <img class="light-logo" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src=<?php echo site_url("assets/img/onirix-blanc.png") ?> alt="" />
                        <img class="dark-logo" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src=<?php echo site_url("assets/img/onirix-blanc.png") ?> alt="" />
                    </a>
                </div>
            </div>
            <div class="menu-icon d-flex align-items-baseline">
                <div class="text-menu p-relative  font-heading text-transform-upper">
                    <div class="p-absolute text-button">Menu</div>
                    <div class="p-absolute text-open">Open</div>
                    <div class="p-absolute text-close">Close</div>
                </div>
                <div class="icon-m" data-dsn="parallax" data-dsn-move="10">
                    <span class="menu-icon-line p-relative d-inline-block icon-top"></span>
                    <span class="menu-icon-line p-relative d-inline-block icon-center"></span>
                    <span class="menu-icon-line p-relative d-block icon-bottom"></span>
                </div>
            </div>
            <nav class="accent-menu dsn-container main-navigation p-absolute  w-100  d-flex align-items-baseline ">
                <div class="menu-cover-title">Menu</div>
                <ul class="extend-container p-relative d-flex flex-column justify-content-center h-100">
                    <li>
                        <a href="<?php echo base_url("Sign");?>" class="user-no-selection">
                            <span class="dsn-title-menu">Se Connnecter</span>
                            <span class="dsn-meta-menu"></span>
                            <span class="dsn-bg-arrow"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("/");?>" class="user-no-selection">
                            <span class="dsn-title-menu">Accueil</span>
                            <span class="dsn-meta-menu">02</span>
                            <span class="dsn-bg-arrow"></span>
                        </a>
                    </li>
                    <li class="dsn-drop-down">
                        <a href="#" class="user-no-selection">
                            <span class="dsn-title-menu">Onirix</span>
                            <span class="dsn-meta-menu">03</span>
                            <span class="dsn-bg-arrow"></span>
                        </a>
                        <ul>
                            <li class="dsn-back-menu">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src=<?php echo site_url("assets/img/left-chevron.svg") ?> alt="">
                                <span class="dsn-title-menu">Onirix</span>
                            </li>
                            <li><a href="<?php echo base_url("Transcription/question");?>">
                                    <span class="dsn-title-menu">Prediction par des textes</span>
                                    <span class="dsn-meta-menu">01</span>
                                </a>
                            </li>
                            <li><a href="<?php echo base_url("Transcription/choixoption");?>">
                                    <span class="dsn-title-menu">Questions à choix multiples</span>
                                    <span class="dsn-meta-menu">02</span>
                                </a>
                            </li>
                            <li><a href="<?php echo base_url("Transcription/choix");?>">
                                    <span class="dsn-title-menu">Illustrations par images</span>
                                    <span class="dsn-meta-menu">03</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url("About");?>" class="user-no-selection">
                            <span class="dsn-title-menu">A Propos</span>
                            <span class="dsn-meta-menu">04</span>
                            <span class="dsn-bg-arrow"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("Contact");?>" class="user-no-selection">
                            <span class="dsn-title-menu">Contact</span>
                            <span class="dsn-meta-menu">05</span>
                            <span class="dsn-bg-arrow"></span>
                        </a>
                    </li>
                </ul>
                <div class="container-content  p-absolute h-100 left-60 d-flex flex-column justify-content-center">
                    <div class="nav__info">
                        <div class="nav-content">
                            <p class="title-line">
                                Locaux</p>
                            <p>
                            <p>88 Bis C <br> Anosizato<br> Tananarive, Madagascar</p>
                        </div>
                        <div class="nav-content">
                            <p class="title-line">
                                Contact</p>
                            <p class="links over-hidden">
                                <a href="#" data-hover-text="+00 (2)012 3321" class="link-hover">+261 34 56 486 25</a>
                            </p>
                            <p class="links  over-hidden">
                                <a href="#" data-hover-text="Onirix-smartit@gmail.com" class="link-hover">Onirix-smartit@gmail.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="nav-social nav-content">
                        <div class="nav-social-inner p-relative">
                            <p class="title-line">
                                Suivez-nous</p>
                            <ul>
                                <li>
                                    <a href="#" target="_blank" rel="nofollow">Dribbble.
                                        <div class="icon-circle"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" rel="nofollow">Behance.
                                        <div class="icon-circle"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" rel="nofollow">Linkedin.
                                        <div class="icon-circle">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" rel="nofollow">Twitter.
                                        <div class="icon-circle"></div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- ========== End Menu ========== -->

    <main class="main-root">

        <!-- ========== side box left ========== -->
        <div class="side-bar-full">


            <div class="side-box-left z-index-1">
                <div class="side-menu border-left border-right p-relative h-100 d-flex justify-content-center">
                    <div class="page-active">
                        <h2 class="text-uppercase">Accueil</h2>
                    </div>
                </div>
            </div>
            <div class="side-box-right text-stroke border-right text-uppercase z-index-2">
                <div class="text-inner over-hidden">
                    <div class="text-stroke-box">
                        <div class="text-stroke-inner">Racontez-nous votre rêve </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End side box left ========== -->

        <div class="p-fixed has-parallax-header has-parallax-header v-dark-head background-main">
            <div class="p-absolute z-index-0 before-z-index h-100 w-100 " data-overlay="3" data-dsn-ajax="img">
                <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src=<?php echo site_url("assets/img/ia-background-3.jpeg") ?> alt="" data-dsn-position="50% 32%">
            </div>
        </div>

        <div id="dsn-scrollbar">
            <div class=" inner-content">
                <!-- ========== Header ========== -->
                <header class="p-relative h-v-100 v-dark-head dsn-header-animation border-bottom">

                    <div class="box-content dsn-container align-items-center ">
                        <div class="hero-content dsn-hero-parallax-title">
                            <h1 class="title has-box-mod">
                                Onirix <br> IA qui va révolutioner les rêves
                                <span class="p-absolute w-100 h-70 bottom-0 bg-mod-exclusion left-0 " data-dsn="parallax"></span>
                            </h1>
                            <div class="description border-before mt-30 mb-30">
                                <h3 class="title-block ah-headline letters scale">
                                    <span class="fw-400">Je suis capable </span>
                                    <span class="ah-words-wrapper fw-400">
                                        <b class="is-visible">de.prédir.votre.avenir </b>
                                        <b>d'analyser.vos.rêves</b>
                                        <b>de.comprendre.ce.qui.vous.tracace</b>
                                        <b>de.changer.votre.vie.? </b>
                                    </span>
                                </h3>
                            </div>
                            <a href="<?php echo base_url("Transcription/choix"); ?>" class="link-custom v-light-head background-main image-zoom move-circle" data-dsn="parallax">
                                JE VEUX ESSAYER
                            </a>
                        </div>

                    </div>
                </header>
                <!-- ========== End Header ========== -->
                <div class="wrapper background-main pt-section">

                    <!-- ========== Template ========== -->
                    <section class="about p-relative dsn-container section-margin" data-dsn-title="About Us">
                        <div class="section-title">
                            <span class="tag-heading p-10 mb-15 background-section heading-color">A Propos de l'institut</span>
                            <h2 class="heading-h2">Nous combinons recherche, <br> psychologie et numérique</h2>
                        </div>

                        <div class="row">
                            <div class="col-lg-7">
                                <div class="p-relative text">
                                    <h2 class="title-block ">Nous sommes une organisation de recherhce <br> dans l'expertise de l'étude des rêves</h2>

                                    <p class="mt-30">L'Institut International des Rêves est une organisation de recherche spécialisée dans l'étude des rêves.
                                        les chercheurs de cet institut ont développé une intelligence artificielle avancée appelée Onirix, qui est capable d'analyser et de décoder les rêves des utilisateurs pour prédire leur avenir. Cette technologie révolutionnaire permettrait de prédire des situations telles qu'une rencontre amoureuse,
                                        des problèmes avec des collègues de travail,ou même des difficultés scolaires.
                                    </p>

                                    <p class="mt-10">Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod
                                        tempor
                                        incididunt ut labore et dolore magna ut enim ad minim veniam nostrud
                                        exercitation ullamco</p>

                                    <ul class="mt-30 lest-icon">
                                        <li>Spécialisé dans l'étude des rêves</li>
                                        <li>Psychologue et chercheurs</li>
                                        <li>Développement du futur</li>
                                        <li>Changement majeur de la perception des rêves</li>
                                    </ul>

                                    <a href="#" class="link-custom v-light image-zoom mt-30" data-dsn="parallax">
                                        A Propos de nous
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-5  ">
                                <div class="box-experience  d-flex justify-content-center flex-column h-100">
                                    <div class="numb-ex fw-bold cover-bg" data-dsn-bg="assets/img/about.gif">
                                        25
                                    </div>
                                    <h3 class="mt-30">
                                        <span class="letter-stroke">ans d'</span>
                                        <br>
                                        <span class="v-light heading-color p-5">
                                            EXPERIENCES DIGITAL
                                        </span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="about-me mb-section pt-section" data-dsn-title="About Me" data-dsn-animate="section">
                        <div class="dsn-container ">
                            <div class="d-grid grid-lg-2 background-section padding-block">
                                <div class="box-img">
                                    <img height="200px !important" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src=<?php echo site_url("assets/img/Onirix-2.jpeg") ?> alt="">
                                    <div class="box-infos pl-30">
                                        <div class="info d-flex flex-column align-items-end mt-30">
                                            <h4 class="sm-title-block mb-10">Onirix</h4>
                                            <h5 class="font-caps body-color">IA de l'orinisme</h5>
                                        </div>
                                        <div class="mt-30 ">
                                            <div class="box-skills-inner d-grid-no-space d-grid grid-md-2 grid-row-gap-30">
                                                <div class="skills-item">
                                                    <h4 class="font-caps mb-10">Précision</h4>
                                                    <div class="bar">
                                                        <span class="fill box-shadow" data-width="96%">
                                                            <span class="number">0%</span>
                                                        </span>
                                                    </div>
                                                    <div class="tip"></div>
                                                </div>

                                                <div class="skills-item">
                                                    <h4 class="font-caps mb-10">Clarification</h4>
                                                    <div class="bar">
                                                        <span class="fill box-shadow" data-width="94%">
                                                            <span class="number">0%</span>
                                                        </span>
                                                    </div>
                                                    <div class="tip"></div>
                                                </div>

                                                <div class="skills-item">
                                                    <h4 class="font-caps mb-10">Compréhenstion</h4>
                                                    <div class="bar">
                                                        <span class="fill box-shadow" data-width="96%">
                                                            <span class="number">0%</span>
                                                        </span>
                                                    </div>
                                                    <div class="tip"></div>
                                                </div>

                                                <div class="skills-item">
                                                    <h4 class="font-caps mb-10">Prédiction</h4>
                                                    <div class="bar">
                                                        <span class="fill box-shadow" data-width="87%">
                                                            <span class="number">0%</span>
                                                        </span>
                                                    </div>
                                                    <div class="tip"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="box-info pl-30 pr-30">
                                    <div class="section-title">
                                        <span class="tag-heading p-10 mb-15 background-main heading-color">A Propos
                                            de Onirix</span>
                                        <h2 class="title-block">Avec Onirix , <br> les rêves deviendront-ils la clé de notre destinée ?
                                        </h2>
                                    </div>

                                    <h4 class="sm-title-block mb-20">Une intelligence articielle révolutionnaire</h4>

                                    <p class="mb-10">Onirix est une intelligence artificielle avancée développée par les chercheurs de l'Institut International des Rêves. Elle utilise une technologie de pointe
                                        pour analyser et décoder les rêves des utilisateurs et leur donner des indications sur leur avenir.</p>

                                    <p>En analysant les images, les symboles et les thèmes récurrents présents dans les rêves,
                                        Onirix peut prédire des situations futures telles qu'une rencontre amoureuse ou des difficultés scolaires.
                                        Elle peut également détecter des signaux plus graves tels que des maladies potentielles ou des problèmes
                                        avec des collègues de travail. La technologie Onirix est considérée comme révolutionnaire
                                        dans le domaine de l'analyse des rêves et est une avancée majeure pour aider les gens à mieux
                                        comprendre leur vie future.</p>

                                    <a href="<?php echo base_url("About"); ?>" class="link-custom v-light background-main image-zoom move-circle mt-30" data-dsn="parallax">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="services dsn-container p-relative section-margin" data-dsn-title="My Services">
                        <div class="section-title">
                            <span class="tag-heading p-10 mb-15 background-section heading-color">Services |
                                offres</span>
                            <h2 class="heading-h2">Nos Services</h2>
                        </div>
                        <div class="d-grid grid-md-2 grid-lg-3 dsn-isotope" data-dsn-item=".service-item">
                            <div class="service-item my-service border">
                                <div class="service-item-inner style-box">
                                    <div class="icon">
                                        <img src=<?php echo site_url("assets/img/services/mobile.svg") ?> alt="">
                                    </div>
                                    <div class="content-box">
                                        <h4 class="title-block pr-10 border-section-bottom mt-20">
                                            Transcription de vos rêves</h4>
                                        <ul class="p-relative mt-20">
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                                Vision détaillé
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                                Explication précise
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                                Prédiction claire
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="service-item my-service border">
                                <div class="service-item-inner style-box">
                                    <div class="icon">
                                        <img src=<?php echo site_url("assets/img/services/development.svg") ?> alt="">
                                    </div>
                                    <div class="content-box">
                                        <h4 class="title-block pr-10 border-section-bottom mt-20">
                                            Interpretation de vos rêves</h4>
                                        <ul class="p-relative mt-20">
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                                Laissez-nous en savoir un peu plus sur votre rêve
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                                Questions à choix multiples
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                                Réponse rapide
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="service-item my-service border">
                                <div class="service-item-inner style-box">
                                    <div class="icon">
                                        <img src=<?php echo site_url("assets/img/services/creative.svg") ?> alt="">
                                    </div>
                                    <div class="content-box">
                                        <h4 class="title-block pr-10 border-section-bottom mt-20">
                                            Questionnaire visuel</h4>
                                        <ul class="p-relative mt-20">
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                                Vision différentes par images
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                                Visuel pour mieux illustrer
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                                Autres Interpretation
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="our-work dsn-container dsn-filter p-relative section-margin" data-dsn-title="My Work">
                        <div class="section-title">
                            <span class="tag-heading p-10 mb-15 background-section heading-color">Portfolio</span>
                            <h2 class="heading-h2">Equipe</h2>
                        </div>
                        <div class="projects-list gallery work-gallery dsn-swiper" data-dsn-option='{"slidesPerView":3,"spaceBetween":30}'>
                            <div class="swiper-container">
                                <div class="swiper-wrapper ">
                                    <div class="swiper-slide background-main">
                                        <div class="work-item p-relative overflow-hidden">
                                            <a class="w-100 p-relative effect-ajax" href="#" data-dsn-ajax="work">
                                                <div class="img-next-box p-relative before-z-index" data-overlay="5">
                                                    <img class="cover-bg-img " data-dsn-position="10% 10%" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src=<?php echo site_url("assets/img/project/person/Loic.jpg") ?> alt="">
                                                </div>

                                                <div class="box-content w-100 mt-20">
                                                    <h4 class="title-block sec-title has-box-mod move-circle" data-dsn="parallax">
                                                        RASOARAHONA <br> Loic
                                                    </h4>
                                                    <div class="metas">
                                                        <span>FrontEnd Developper</span>
                                                        <span>FullStack Developer</span>
                                                    </div>

                                                    <div class="view-project">Integrator</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide background-main">
                                        <div class="work-item p-relative overflow-hidden">
                                            <a class="w-100 p-relative effect-ajax" href="#" data-dsn-ajax="work">
                                                <div class="img-next-box p-relative before-z-index" data-overlay="5">
                                                    <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src=<?php echo site_url("assets/img/project/person/Princia.jpg") ?> alt="">
                                                </div>

                                                <div class="box-content w-100  mt-20">
                                                    <h4 class="title-block sec-title has-box-mod move-circle" data-dsn="parallax">
                                                        RAMAROSON <br> Sandy Princia
                                                    </h4>
                                                    <div class="metas">
                                                        <span>Backend-Developper</span>
                                                        <span>FullStack Developer</span>
                                                    </div>

                                                    <div class="view-project">FrontEnd Developper</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide background-main">
                                        <div class="work-item p-relative overflow-hidden">
                                            <a class="w-100 p-relative effect-ajax" href="#" data-dsn-ajax="work">
                                                <div class="img-next-box p-relative before-z-index" data-overlay="5">
                                                    <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src=<?php echo site_url("assets/img/project/person/Mendrika.jpg") ?> alt="">
                                                </div>

                                                <div class="box-content w-100 mt-20">
                                                    <h4 class="title-block sec-title has-box-mod move-circle" data-dsn="parallax">
                                                        RANDRIAMAHALEO <br> Mendrika
                                                    </h4>
                                                    <div class="metas">
                                                        <span>Backend-Developper</span>
                                                    </div>

                                                    <div class="view-project">FullStack Developper</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide background-main">
                                        <div class="work-item p-relative overflow-hidden ">
                                            <a class="w-100 p-relative effect-ajax" href="#" data-dsn-ajax="work">
                                                <div class="img-next-box p-relative before-z-index" data-overlay="5">
                                                    <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src=<?php echo site_url("assets/img/project/person/Sitraka.jpg") ?> alt="">
                                                </div>

                                                <div class="box-content w-100  mt-20">
                                                    <h4 class="title-block sec-title has-box-mod move-circle" data-dsn="parallax">
                                                        RANAIVOSAONA <br>Sitraka Rovaniaina
                                                    </h4>
                                                    <div class="metas">
                                                        <span>Web Designer</span>
                                                        <span>UX/UI Designer</span>
                                                    </div>

                                                    <div class="view-project">Front-Developper</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dsn-pagination mt-30 dsn-container d-flex justify-content-between">
                                <div class="swiper-next">
                                    <div class="next-container">
                                        <div class="container-inner">
                                            <div class="triangle"></div>
                                            <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round" stroke-miterlimit="10">
                                                    <circle cx="12" cy="12" r="10.5"></circle>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-prev">
                                    <div class="prev-container">
                                        <div class="container-inner">
                                            <div class="triangle"></div>
                                            <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round" stroke-miterlimit="10">
                                                    <circle cx="12" cy="12" r="10.5"></circle>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="next-page dsn-container section-padding p-relative" data-dsn-title="Contact Us">
                        <div class="full-bg background-section p-absolute h-100 before-z-index"></div>
                        <span class="tag-heading background-main heading-color p-10">LET’S TALK</span>
                        <h2 class="title max-w570">
                            <span class="letter-stroke">ALLONS </span>
                            <br> CONNAITRE VOTRE FUTUR
                        </h2>
                        <a href="<?php echo base_url("Transcription/choix"); ?>"  class="link-custom p-relative mt-30 v-light">
                            Prédire mon avenir
                        </a>
                    </div>
                    <footer class="footer border-top background-section">
                        <div class="dsn-container">
                            <div class="d-grid grid-sm-2">
                                <div class="footer-item">
                                    <a href="<?php echo base_url("/");?>" class="logo-footer m-auto">
                                        <img src=<?php echo site_url("assets/img/onirix-blanc.png") ?> alt="" class="logo-dark cover-bg-img">
                                        <img src=<?php echo site_url("assets/img/onirix-noir.png") ?> alt="" class="logo-light cover-bg-img">
                                    </a>
                                </div>
                                <div class="footer-item text-right">
                                    <h5 class="sm-title-block mb-10">Suivez-nous</h5>
                                    <ul class="box-social">
                                        <li data-dsn="parallax"><a href="#">Fb</a></li>
                                        <li data-dsn="parallax"> <a href="#">TW</a></li>
                                        <li data-dsn="parallax"><a href="#">INST</a></li>
                                        <li data-dsn="parallax"><a href="#">LI</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-bottom d-grid grid-md-2 border-top pt-30 mt-30">
                                <div class="footer-item order-md-2">
                                    <div class="nav-footer text-right">
                                        <ul>
                                            <li class="d-inline-block over-hidden"><a class="link-hover" data-dsn="parallax" href="#">Accueil</a></li>
                                            <li class="d-inline-block over-hidden"><a class="link-hover" data-dsn="parallax" href="#">Services</a></li>
                                            <li class="d-inline-block over-hidden"><a class="link-hover" data-dsn="parallax" href="#">A Propos</a></li>
                                            <li class="d-inline-block over-hidden"><a class="link-hover" data-dsn="parallax" href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="footer-item">
                                    <div class="copyright">
                                        <div class="copright-text over-hidden">© 2023 WebCup by <a class="link-hover" data-hover-text="Smart IT" href="#" target="_blank">Smart IT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>

        </div>
        <!-- ========== Contact Form Model ========== -->
        <div class="contact-btn">
            <div class="contact-btn-txt">Contact</div>
        </div>
        <div class="contact-modal background-section">
            <div class="dsn-container contact-inner section-margin">
                <div class="section-title">
                    <span class="tag-heading background-section color-heading">Onirix</span>
                    <h2 class="heading-h2">Comment je peux vous aider ? </h2>
                </div>


                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-box d-flex flex-column">
                            <h4 class="title-block p-relative mb-30 text-uppercase border-section-bottom">
                                De l'aide ?</h4>
                                <form class="form w-100" method="post" action="<?php echo base_url();?>" data-toggle="validator">
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="form-group">
                                        <div class="entry-box">
                                            <label>Votre nom *</label>
                                            <input id="form_name" type="text" name="name" placeholder="Tapez votre nom" required="required" data-error="Le nom est requis.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="entry-box">
                                            <label>Votre email*</label>
                                            <input id="form_email" type="email" name="email" placeholder="Tapez  votre adresse email" required="required" data-error="L'email est requis">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="entry-box">
                                            <label>Des recommandations ? </label>
                                            <textarea id="form_message" class="form-control" name="message" placeholder="Decrivez nous ce que vous voulez nous transmettre" required="required" data-error="Please,leave us a message."></textarea>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="text-right">
                                        <div class="image-zoom w-auto d-inline-block move-circle" data-dsn="parallax">
                                            <input type="submit" value="Envoyer" class="v-light">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="contact-content d-flex flex-column p-relative background-main box-padding h-100">
                            <h4 class="title-block p-relative mb-30 text-uppercase border-section-bottom">
                                Contact Info</h4>

                            <div class="content-bottom">
                                <div class="item">
                                    <h5 class="sm-title-block mb-15">Adresse</h5>
                                    <p>88 Bis C <br> Anosizato<br> Tananarive, Madagascar</p>
                                </div>

                                <div class="item">
                                    <h5 class="sm-title-block mb-15">Email</h5>
                                    <a href="mailto:Onirix-smartit@gmail.com">Onirix-smartit@gmail.com</a>
                                </div>

                                <div class="item">
                                    <h5 class="sm-title-block mb-15">Téléphone</h5>
                                    <a href="tel:http://+012345678">+261 34 59 48 55</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End Contact Form Model ========== -->

        <!-- ========== Contact Stories ========== -->
        <div class="stories-btn">
            <div class="stories-btn-txt">Nous</div>
        </div>
        <div class="dsn-stories dsn-stories-model">
            <div class="close-story"></div>
            <div class="dsn-stories-gallery">
                <div class="p-relative h-100">
                    <a href=<?php echo site_url("assets/img/ia-illustration.png") ?>></a>
                    <a href=<?php echo site_url("assets/img/ia-illustration-2.jpg") ?>></a>
                </div>

                <h4 class="title-block">
                    Illustration  <br> Intelligence artificelle et Rêves
                </h4>
            </div>
            <div class="dsn-stories-gallery">
                <div class="p-relative h-100">
                <a href=<?php echo site_url("assets/img/ia-background.png") ?>></a>   
                </div>
                <h4 class="title-block">
                    Simulation analyse IA des rêves
                </h4>
            </div>
            <div class="dsn-stories-gallery">
                <div class="p-relative h-100">
                    <a href=<?php echo site_url("assets/img/ia-background-3.jpeg") ?>></a>
                    <a href=<?php echo site_url("assets/img/ia-background-2.jpeg") ?>></a>
                    <a href=<?php echo site_url("assets/img/ia-background-4.jpeg") ?>></a>
                </div>

                <h4 class="title-block">
                    Onirix
                </h4>
            </div>
            <div class="dsn-stories-gallery">
                <div class="p-relative h-100">
                    <a href=<?php echo site_url("assets/img/ia-predict.jpeg") ?>></a>   
                    <a href=<?php echo site_url("assets/img/orinix.jpeg") ?>></a>
                </div>

                <h4 class="title-block">
                    La profondeur <br> des Rêves
                </h4>
            </div>

        </div>  
        <!-- ========== End Contact Stories ========== -->

    </main>

    <!-- ========== Cursor Page ========== -->
    <div class="cursor">

        <div class="cursor-helper">
            <span class="cursor-drag">Drag</span>
            <span class="cursor-view">Voir</span>
            <span class="cursor-open"><i class="fas fa-plus"></i></span>
            <span class="cursor-close">Fermer</span>
            <span class="cursor-play">Play</span>
            <span class="cursor-next"><i class="fas fa-chevron-right"></i></span>
            <span class="cursor-prev"><i class="fas fa-chevron-left"></i></span>
        </div>

    </div>
    <!-- ========== End Cursor Page ========== -->


    <!-- ========== social network ========== -->
    <div class="social-network">
        <ul class="socials d-flex  flex-column ">
            <li>
                <a href="" target="_blank">
                    <i class="fab fa-dribbble"></i>
                    <span>Db</span>
                </a>
            </li>
            <li>
                <a href="" target="_blank">
                    <i class="fab fa-twitter"></i>
                    <span>Tw</span>
                </a>
            </li>
            <li>
                <a href="" target="_blank">
                    <i class="fab fa-behance"></i>
                    <span>Be</span>
                </a>
            </li>
            <li>
                <a href="" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                    <span>Fb</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- ========== End social network ========== -->

    <!-- ========== Light & Dark Options ========== -->
    <div class="day-night">
        <div class="night active" data-dsn-theme="dark">
            <svg width="48" height="48" viewBox="0 0 48 48">
                <rect x="12.3" y="23.5" width="2.6" height="1"></rect>
                <rect x="16.1" y="15.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.8871 16.5732)" width="1" height="2.6"></rect>
                <rect x="23.5" y="12.3" width="1" height="2.6"></rect>
                <rect x="30.1" y="16.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.5145 27.0538)" width="2.6" height="1"></rect>
                <rect x="33.1" y="23.5" width="2.6" height="1"></rect>
                <rect x="30.9" y="30.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.9952 31.4264)" width="1" height="2.6"></rect>
                <rect x="23.5" y="33.1" width="1" height="2.6"></rect>
                <rect x="15.3" y="30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -17.3677 20.9457)" width="2.6" height="1"></rect>
                <path d="M24,18.7c-2.9,0-5.3,2.4-5.3,5.3s2.4,5.3,5.3,5.3s5.3-2.4,5.3-5.3S26.9,18.7,24,18.7z M24,28.3c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3S26.4,28.3,24,28.3z">
                </path>
            </svg>
        </div>
        <div class="moon" data-dsn-theme="night">
            <svg width="48" height="48" viewBox="0 0 48 48">
                <path d="M24,33.9c-5.4,0-9.9-4.4-9.9-9.9c0-4.3,2.7-8,6.8-9.4l0.8-0.3l-0.1,0.9c-0.2,0.6-0.2,1.3-0.2,1.9c0,5.2,4.3,9.5,9.5,9.5c0.6,0,1.3-0.1,1.9-0.2l0.8-0.2L33.3,27C32,31.1,28.3,33.9,24,33.9z M20.4,15.9c-3.2,1.4-5.3,4.5-5.3,8.1c0,4.9,4,8.9,8.9,8.9c3.6,0,6.7-2.1,8.1-5.3c-0.4,0-0.8,0.1-1.3,0.1c-5.8,0-10.5-4.7-10.5-10.5C20.4,16.7,20.4,16.3,20.4,15.9z">
                </path>
            </svg>
        </div>
    </div>
    <!-- ========== End Light & Dark Options ========== -->


    <!-- ========== Scroll Right Page To Top Page ========== -->
    <div class="scroll-to-top">
        <img src=<?php echo site_url("assets/img/scroll_top.svg") ?> alt="">
        <div class="box-number v-middle">
            <span>0%</span>
        </div>
    </div>
    <!-- ========== End Scroll Right Page To Top Page ========== -->

    <!-- ========== paginate-right-page ========== -->
    <div class="dsn-paginate-right-page"></div>

    <!-- Optional JavaScript -->
    <script src=<?php echo site_url("assets/js/jquery-3.1.1.min.js") ?>></script>
    <script src=<?php echo site_url("assets/js/plugins.min.js") ?>></script>
    <script src=<?php echo site_url("assets/js/dsn-grid.min.js") ?>></script>
    <script src=<?php echo site_url("assets/js/custom.js") ?>></script>

</body>

</html>