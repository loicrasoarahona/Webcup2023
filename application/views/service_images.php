<link rel="stylesheet" href="<?php echo site_url('assets/css/serviceImages.css') ?>">

<div class="container section-title text-center">
    <p class="section-sub-title"></p>
    <h2>Lequel de ces images illustre le plus votre rêve ?</h2>
</div>
<?php $i = 0; ?>
<?php foreach ($listeChoix as $groupeChoix) { ?>
    <section id="sectionChoix<?php echo $i; ?>" class="sectionChoixImage section-margin" <?php echo ($i > 0 ? 'hidden' : '') ?>>

        <div class="container">
            <div class="wrapper-client p-relative w-100 d-flex flex-wrap dsn-animate-bg2 hide-animate-bg2 d-flex justify-content-around">
                <div class="animate-bg2 background-main p-absolute dsn-z-index-2"></div>

                <h4><?php echo $groupeChoix[0]['categorie']; ?></h4>
                <?php $irep = 0; ?>
                <?php foreach ($groupeChoix as $choix) { ?>
                    <div irep="<?php echo $irep; ?>" class="logo-box p-relative background-section d-flex text-center align-items-center over-hidden item-animate-bg2 col-5 col-lg-3">
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
                    <?php $irep++; ?>
                <?php } ?>

            </div>
        </div>
    </section>
    <?php $i++; ?>
<?php } ?>

<script>
    $elements = Array();
    let indice = 1;

    const tousLesChoix = <?php echo json_encode($listeChoix); ?>;

    const choixUtilisateur = Array();

    <?php for ($n = 0; $n < $i; $n++) { ?>
        $elements.push($('#sectionChoix<?php echo $n ?>'))
    <?php } ?>



    $('.logo-box').on('click', function() {
        choixUtilisateur.push(tousLesChoix[indice - 1][$(this).attr('irep')]);
        console.log(choixUtilisateur);
        $($elements[indice - 1]).fadeToggle(1000, () => {
            $($elements[indice++]).fadeToggle();
            if (indice > tousLesChoix.length)
                redirectWithPost("<?php echo site_url('Transcription/validationReponseImage') ?>", {
                    reponses: JSON.stringify(choixUtilisateur)
                })
        });
    });

    function redirectWithPost(url, postData) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = url;

        for (const [key, value] of Object.entries(postData)) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = key;
            input.value = value;
            form.appendChild(input);
        }

        document.body.appendChild(form);
        form.submit();
    }
</script>