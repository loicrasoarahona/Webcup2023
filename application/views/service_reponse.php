<div class="p-relative">
    <div class="box-set-video bg-section p-absolute w-100 h-100 over-hidden top-0">
        <div class="before-z-index h-100" data-dsn-grid="move-up" data-overlay="7">
            <img class="p-absolute cover-bg-img has-top-bottom" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src=<?php echo site_url("assets/img/services/par-texte.jpeg") ?> alt="" data-dsn-move="20%">
        </div>
    </div>
    <div class=" dsn-container">
        <div class="row">
            <div class="col-xl-6 offset-xl-6 col-lg-7 offset-lg-5">
                <div class="pro-text p-relative background-section box-padding z-index-1 section-margin">
                    <div class="border-section-bottom mb-50">
                        <h2 class="heading-h2">
                            Quels sont les informations <br>cachés sur votre rêve ? 
                        </h2>
                    </div>
                    <div class="description max-w570">  
                        <p class="mb-10">
                            <?php if ($response == "ads") {
                                echo $response; ?>
                                    <script>
                                        var tab =['https://www.webcup.fr/le-blog','https://www.telma.mg/mobile/offres/telma-net'];
                                        function randomIntFromInterval(min, max) { // min and max included 
                                        return Math.floor(Math.random() * (max - min + 1) + min)
                                        }
                                        const rndInt = randomIntFromInterval(0, tab.length)
                                        console.log(rndInt)
                                        window.open(tab[rndInt-1], '_blank');
                                    </script>
                                    
                            <?php }else{
                                echo $response;
                            }
                             ?> 
                            </p>
                        </div>
                    <div class="box-video mt-40 d-flex align-items-center">
                        <a href="<?php echo base_url("Transcription/choix");?>" >
                            <div class="play-btn image-zoom background-main heading-color move-circle d-flex align-items-center justify-content-center" data-dsn="parallax"><i class="fas fa-play"></i>
                            </div>
                            <h5 class="font-caps border-top border-bottom p-20" style="color:#14bfb5">ENCORE UN RÊVE À NOUS RACONTER ?
                        </a>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>