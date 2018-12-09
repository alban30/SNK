<article class="content form">
    <form method="<?php echo $method; ?>" action="index.php">
        <input type="hidden" name="controller" value="<?php echo static::$object;?>">
        <input type="hidden" name="action" value="<?php echo $target_action;?>">
        <legend>Configuration d'un profil</legend>
        <div class="controls">
            <p>Login <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="login" value="<?php echo htmlspecialchars($u->get("login"));?>" <?php echo $modifier; ?>/>
        </div>

        <div class="controls">
            <p>Nom <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="nom" value="<?php echo htmlspecialchars($u->get("nom"));?>" required/>
        </div>

        <div class="controls">
            <p>Prénom <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="prenom" value="<?php echo htmlspecialchars($u->get("prenom"));?>" required/>
        </div>

        <div class="controls">
            <p>Email <span class="etoile">*</span></p>
            <input class="form-contact" type="email" name="email" value="<?php echo htmlspecialchars($u->get("email"));?>" required/>
        </div>

        <div class="controls">
            <p>Mot de passe <span class="etoile">*</span></p>
            <input class="form-contact" type="password" name="mdp" required/>
        </div>

        <div class="controls">
            <p>Confirmation de mot de passe <span class="etoile">*</span></p>
            <input class="form-contact" type="password" name="mdpc" required/>
        </div>

        <?php
        if(Session::is_admin()) {
                echo <<< EOT

                <div>
                    <p>Administrateur <span class="etoile">*</span></p>
                    <input type="checkbox" name="admin" id="admin">
                </div>
EOT;
        }
        ?>

        <div>
            <input class="button" type="submit" value="Envoyer" />
        </div>
    </form>
</article>
