<header class="header-pages dsn-container mb-section header-padding-top background-main">
    <div class="box-title ">
        <h1 class="title">
            <span class="letter-stroke">prêt</span> <br>
            <span class="line-bg-left pl-80">à nous raconter?</span>
        </h1>
        <div class="mt-30 d-flex w-100 justify-content-end">
            <p class="border-left pl-20 max-w570">Racontez nous vos rêves les plus en détails possible
                 afin que nous puissions mieux les comprendre 
                        pour pouvoir prédire votre avenir</p>
        </div>
    </div>
</header>

<div class="dsn-container contact-inner section-margin">
    <div class="section-title">
        <span class="tag-heading background-section color-heading">Orinix</span>
        <h2 class="heading-h2">C'était comment votre rêve ?</h2>
    </div>


    <div class="row">
        <div class="col-lg-8 col-md-6">
            <div class="form-box d-flex flex-column">
                <h4 class="title-block p-relative mb-30 text-uppercase border-section-bottom">Racontez moi en détails</h4>
                <form class="form w-100" method="post" action="<?php echo base_url("Chat");?>" data-toggle="validator" target="_blank">
                    <input type="hidden" name="isquestion" value="1">
                    <div class="messages"></div>
                    <div class="input__wrap controls">
                        <div class="form-group">
                            <div class="entry-box">
                                <label>Description</label>
                                <textarea id="form_message" class="form-control" name="question" placeholder="Description précise de votre rêve ..." required="required" data-error="Please,leave us a message."></textarea>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="text-right">
                            <div class="image-zoom w-auto d-inline-block move-circle" data-dsn="parallax">
                                <input type="submit" value="Prédir mon avenir" class="v-light">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            
        </div>
    </div>
</div>

<!-- ========== next-page ========== -->
<section class="next-page dsn-container background-section section-padding">
    <a href="work.html" class="effect-ajax">
        <h2 class="title">
            <span class="letter-stroke">Digital </span> <br>
            <span class="line-bg-left pl-80">Experiences</span>
        </h2>
    </a>
</section>