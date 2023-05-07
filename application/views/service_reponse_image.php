<section class="our-work work-list dsn-filter  dsn-filter p-relative section-margin">
    <div class="filtering d-flex align-items-center dsn-container justify-content-between mb-50">
        <h3 class="title-block border-before">Prédiction par Image</h3>

    </div>
    <div class="gallery-portfolio section-margin dsn-stories v-dark-head d-flex" data-dsn-rowheight="300" data-dsn-margins="15">

        <?php foreach ($responses as $choix) { ?>
            <div class="dsn-stories-gallery col-6 ">
                <img style="width: 10rem; height: 10rem" src=<?php echo site_url("assets/img/data_images/" . $choix->photo) ?> />
                <h4 class="sm-title-block has-box-mod move-circle" data-dsn="parallax">
                    <?php $choix->categorie; ?>
                </h4>
            </div>
        <?php } ?>
    </div>
    </div>
</section>
<section class="about p-relative dsn-container section-margin" data-dsn-title="About Us">
    <div class="row">
        <div class="col-lg-12">
            <div class="p-relative text">
                <h2 class="title-block ">L'analyse de vos choix nous a permis de ceci : <br> <?php $histoire = $this->Historique->get_historiqueimage_bycle($mostFrequentElement);
                                                                                                echo $histoire['reponse']; ?></h2>
                <ul class="mt-30 lest-icon">
                    <?php foreach ($responses as $choix) { ?>
                        <li><?php echo explode('|', $choix->description)[1] ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>