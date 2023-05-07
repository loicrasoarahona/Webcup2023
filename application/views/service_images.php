<link rel="stylesheet" href="<?php echo site_url('assets/css/serviceImages.css') ?>">

<?php foreach ($listeChoix as $groupeChoix) { ?>
    <section class="sectionChoixImage section-margin">
        <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.07" data-dsn-duration="170%" data-dsn-move="0%">
            CLIENTS
        </div>
        <div class="container section-title text-center">
            <p class="section-sub-title">OUR CLIENTS</p>
            <h2>Your successful, <br> Nakaiza oo</h2>
        </div>
        <div class="container">
            <div class="wrapper-client p-relative w-100 d-flex flex-wrap dsn-animate-bg2 hide-animate-bg2 d-flex justify-content-around">
                <div class="animate-bg2 background-main p-absolute dsn-z-index-2"></div>

                <?php foreach ($groupeChoix as $choix) { ?>
                    <div class="logo-box p-relative background-section d-flex text-center align-items-center over-hidden item-animate-bg2 col-5 col-lg-3">
                        <img style="width: 10rem; height: 10rem" src="<?php echo site_url('assets/img/data_images/' . $choix['photo']) ?>" alt="">

                        <div class="info p-absolute w-100 h-100 dsn-z-index-2">
                            <div class="content">
                                <div class="entry">
                                    <div>
                                        <h5>Google</h5>
                                        <a href="#">www.google.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
<?php } ?>