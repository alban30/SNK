<article class="content form">
    <form method="<?php echo $method; ?>" action="index.php">
        <input type="hidden" name="controller" value="<?php echo static::$object;?>">
        <input type="hidden" name="action" value="<?php echo $target_action;?>">
        <legend>Mise à jour d'une commande</legend>
        <div class="controls">
            <p>ID Commande <span class="etoile">*</span></p>
            <input class="form-contact" type="number" name="idCommande" value="<?php echo htmlspecialchars($c->get("id_commande"));?>" <?php echo $modifier; ?>/>
        </div>

        <div class="controls">
            <p>Login <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="login" value="<?php echo htmlspecialchars($c->get("login"));?>" required/>
        </div>

        <div class="controls">
            <p>Date <span class="etoile">*</span></p>
            <input class="form-contact" type="date" name="date" value="<?php echo htmlspecialchars($c->get("date"));?>" required/>
        </div>

        <div>
            <input class="button" type="submit" value="Envoyer" />
        </div>
    </form>
</article>
