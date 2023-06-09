<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="parallax one page" />
    <meta name="keyword" content="agency, business, corporate, creative, freelancer, interior, joomla template, K2 Blog, minimal, modern, multipurpose, personal, portfolio, responsive, simple" />

    <!--  Title -->
    <title>Onirix - IA</title>

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
    <script src=<?php echo site_url("assets/js/jquery-3.1.1.min.js") ?>></script>
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
                        <img class="dark-logo" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src=<?php echo site_url("assets/img/onirix-noir.png") ?> alt="" />
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
                        <h2 class="text-uppercase">Onirix</h2>
                    </div>
                </div>
            </div>
            <div class="side-box-right text-stroke border-right text-uppercase z-index-2">
                <div class="text-inner over-hidden">
                    <div class="text-stroke-box">
                        <div class="text-stroke-inner">Nos rêves devenus réalités ? </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End side box left ========== -->

        <div class="p-fixed before-z-index h-100 left-bar" data-overlay="7" data-dsn-ajax="img">
            <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src=<?php echo site_url("assets/img/ia-background-3.jpeg") ?> alt="">
        </div>

        <div id="dsn-scrollbar">
            <div class=" inner-content">

                <div class="shap-linear w-100"></div>

                <div class="wrapper ">
                    <!-- ========== Template ========== -->
                    <?php include($view . ".php"); ?>
                    <!-- ========== End Template ========== -->
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
                                            <li class="d-inline-block over-hidden"><a class="link-hover" data-dsn="parallax" href="<?php echo base_url("/");?>">Accueil</a></li>
                                            <li class="d-inline-block over-hidden"><a class="link-hover" data-dsn="parallax" href="<?php echo base_url("Transcription/choix");?>">Services</a></li>
                                            <li class="d-inline-block over-hidden"><a class="link-hover" data-dsn="parallax" href="<?php echo base_url("About");?>">A Propos</a></li>
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
                            <form id="contact-form" class="form w-100" method="post" action="contact.php" data-toggle="validator">
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
                                            <input type="submit" value="Nous contacter" class="v-light">
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
                                    <a href="mailto:info@dsngrid.com">onirix-smartit@gmail.com</a>
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

    </main>

    <!-- ========== Cursor Page ========== -->
    <div class="cursor">

        <div class="cursor-helper">
            <span class="cursor-drag">Drag</span>
            <span class="cursor-view">View</span>
            <span class="cursor-open"><i class="fas fa-plus"></i></span>
            <span class="cursor-close">Close</span>
            <span class="cursor-play">play</span>
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

    <script src=<?php echo site_url("assets/js/plugins.min.js") ?>></script>
    <script src=<?php echo site_url("assets/js/dsn-grid.min.js") ?>></script>
    <script src=<?php echo site_url("assets/js/custom.js") ?>></script>
    <script src="<?php echo site_url("/assets/js/questionOptions.js") ?>"></script>

</body>

</html>