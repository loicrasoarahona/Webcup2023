<div>
    <form id="contact-form" class="form w-100" method="post" action="contact.php" data-toggle="validator">
        <div class="messages"></div>
        <div class="input__wrap controls">
            <div class="form-group">
                <div class="entry-box">
                    <label>Email</label>
                    <input id="form_name" type="email" name="email" placeholder="Tapez votre email" required="required" data-error="Le nom est requis">
                </div>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <div class="entry-box">
                    <label>Votre mot de passe</label>
                    <input id="form_email" type="password" name="mdp" placeholder="Tapez votre mot de passe" required="required" data-error="Le mot de passe est requis">
                </div>
                <div class="help-block with-errors"></div>
            </div>
            <div class="text-right">
                <div class="image-zoom w-auto d-inline-block move-circle" data-dsn="parallax">
                    <input type="submit" value="Se connecter" class="v-light">
                </div>
            </div>
        </div>
    </form>
</div>