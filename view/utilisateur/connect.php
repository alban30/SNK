<article class="content form">
    <form method="<?php echo $method; ?>" action="index.php">
        <input type="hidden" name="controller" value="<?php echo static::$object;?>">
        <input type="hidden" name="action" value="<?php echo $target_action;?>">
        <legend>Connexion</legend>
        <div class="controls">
            <p>Login <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="login" required/>
        </div>

        <div class="controls">
            <p>Mot de passe <span class="etoile">*</span></p>
            <input class="form-contact" type="password" name="mdp" required/>
        </div>

        <div>
            <input class="button" type="submit" value="Envoyer" />
        </div>
    </form>
    <div>
        <div class="create">
            <a href="index.php?controller=utilisateur&action=create"><input type="button" value="Inscription" /></a>
        </div>
    </div>
</article>
