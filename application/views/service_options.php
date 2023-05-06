<?php $indice = 0; ?>
<link rel="stylesheet" href="<?php echo site_url('/assets/css/questionOptions.css') ?>">

<header class="header-pages mb-section header-padding-top dsn-container background-main">
    <div class="box-title ">
        <h1 class="title">
            <span class="letter-stroke">Décrivez votre rêve </span> <br>
            <span class="line-bg-left pl-80">Digital Experiences</span>
        </h1>
        <div class="mt-30 d-flex w-100 justify-content-end">
            <p class="border-left pl-20 max-w570">
                Un large choix de questions pour que nous puissions en savoir plus sur votre avenir</p>
        </div>
    </div>
</header>

<div class="titre container">
    <h3>Choisissez votre réponse</h3>
    <hr />
</div>

<section id="questionGroupe<?php echo ++$indice; ?>" class="section-options section-margin">
    <div class="container">
        <div class="wrapper-client p-relative w-100 d-flex flex-wrap dsn-animate-bg hide-animate-bg">
            <h5><?php echo $listeReve[0]; ?></h5>
            <div class="animate-bg background-main p-absolute dsn-z-index-2"></div>
            <?php $reve = $listeReve[1];
            for ($i = 0; $i < count($reve); $i++) { ?>
                <div irep="<?php echo $i ?>" class="logo-box p-relative background-section d-flex text-center align-items-center over-hidden item-animate-bg">
                    <h6 style="z-index: 2;"><?php echo $reve[$i]['nom']; ?></h6>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="questionGroupe<?php echo ++$indice; ?>" class="section-options section-margin" hidden>
    <div class="container">
        <div class="wrapper-client p-relative w-100 d-flex flex-wrap dsn-animate-bg hide-animate-bg">
            <h5><?php echo $listeReve[2]; ?></h5>
            <div class="animate-bg background-main p-absolute dsn-z-index-2"></div>
            <?php $reve = $listeReve[3];
            for ($i = 0; $i < count($reve); $i++) { ?>
                <div irep="<?php echo $i ?>" class="logo-box p-relative background-section d-flex text-center align-items-center over-hidden item-animate-bg">
                    <h6 style="z-index: 2;"><?php echo $reve[$i]['nom']; ?></h6>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="questionGroupe<?php echo ++$indice; ?>" class="section-options section-margin" hidden>
    <div class="container">
        <div class="wrapper-client p-relative w-100 d-flex flex-wrap dsn-animate-bg hide-animate-bg">
            <h5><?php echo $listeReve[4]; ?></h5>
            <div class="animate-bg background-main p-absolute dsn-z-index-2"></div>
            <?php $reve = $listeReve[5];
            for ($i = 0; $i < count($reve); $i++) { ?>
                <div irep="<?php echo $i ?>" class="logo-box p-relative background-section d-flex text-center align-items-center over-hidden item-animate-bg">
                    <h6 style="z-index: 2;"><?php echo $reve[$i]['nom']; ?></h6>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="questionGroupe<?php echo ++$indice; ?>" class="section-options section-margin" hidden>
    <div class="container">
        <div class="wrapper-client p-relative w-100 d-flex flex-wrap dsn-animate-bg hide-animate-bg">
            <h5><?php echo $listeReve[6]; ?></h5>
            <div class="animate-bg background-main p-absolute dsn-z-index-2"></div>
            <?php $reve = $listeReve[7];
            for ($i = 0; $i < count($reve); $i++) { ?>
                <div irep="<?php echo $i ?>" class="logo-box p-relative background-section d-flex text-center align-items-center over-hidden item-animate-bg">
                    <h6 style="z-index: 2;"><?php echo $reve[$i]['nom']; ?></h6>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="questionGroupe<?php echo ++$indice; ?>" class="section-options section-margin" hidden>
    <div class="container">
        <div class="wrapper-client p-relative w-100 d-flex flex-wrap dsn-animate-bg hide-animate-bg">
            <h5><?php echo $listeReve[8]; ?></h5>
            <div class="animate-bg background-main p-absolute dsn-z-index-2"></div>
            <?php $reve = $listeReve[9];
            for ($i = 0; $i < count($reve); $i++) { ?>
                <div irep="<?php echo $i ?>" class="logo-box p-relative background-section d-flex text-center align-items-center over-hidden item-animate-bg">
                    <h6 style="z-index: 2;"><?php echo $reve[$i]['nom']; ?></h6>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="questionGroupe<?php echo ++$indice; ?>" class="section-options section-margin" hidden>
    <div class="container">
        <div class="wrapper-client p-relative w-100 d-flex flex-wrap dsn-animate-bg hide-animate-bg">
            <h5><?php echo $listeReve[10]; ?></h5>
            <div class="animate-bg background-main p-absolute dsn-z-index-2"></div>
            <?php $reve = $listeReve[11];
            for ($i = 0; $i < count($reve); $i++) { ?>
                <div irep="<?php echo $i ?>" class="logo-box p-relative background-section d-flex text-center align-items-center over-hidden item-animate-bg">
                    <h6 style="z-index: 2;"><?php echo $reve[$i]['nom']; ?></h6>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<script>
    const sousCategories = Array();
    const reponses = Array();

    <?php for ($i = 1; $i < count($listeReve); $i += 2) { ?>
        sousCategories.push(<?php echo json_encode($listeReve[$i]); ?>)
    <?php } ?>


    const questionnaires = Array();
    let indice = 1;

    <?php for ($i = 1; $i <= $indice; $i++) { ?>
        questionnaires.push($('<?php echo "#questionGroupe" . $i ?>'));
    <?php } ?>

    $('.logo-box').on('click', function() {
        reponses.push(sousCategories[indice - 1][$(this).attr('irep')]);
        console.log(reponses);
    });


    $('.section-options').on('click', function() {

        setTimeout(() => {
            $(this).fadeToggle(600, () => {
                if (indice < questionnaires.length - 1)
                    $(questionnaires[indice++]).fadeToggle();
                else
                    redirectWithPost("<?php echo site_url('Chat/') ?>", {
                        isquestion: 0,
                        reponses: JSON.stringify(reponses)
                    });
            });

        }, 600);
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