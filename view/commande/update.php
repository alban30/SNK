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
            <p>Modèle <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="nomSneaker" value="<?php echo htmlspecialchars($c->get("nom_sneaker"));?>" required/>
        </div>

        <div class="controls">
            <p>Marque <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="nomSneaker" value="<?php echo htmlspecialchars($c->get("marque_sneaker"));?>" required/>
        </div>

        <div class="controls">
            <p>Prix <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="prixSneaker" value="<?php echo htmlspecialchars($c->get("prix_sneaker"));?>" required/>
        </div>

        <div class="controls">
            <p>Couleur <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="couleurSneaker" value="<?php echo htmlspecialchars($c->get("couleur_sneaker"));?>" required/>
        </div>

        <div class="controls">
            <p>Pointure <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="pointureSneaker" value="<?php echo htmlspecialchars($c->get("pointure_sneaker"));?>" required/>
        </div>

        <div class="controls">
            <p>Login <span class="etoile">*</span></p>
            <input class="form-contact" type="number" name="login" value="<?php echo htmlspecialchars($c->get("login"));?>" required/>
        </div>

        <div class="controls">
            <p>Nom <span class="etoile">*</span></p>
            <input class="form-contact" type="number" name="nom" value="<?php echo htmlspecialchars($c->get("nom"));?>" required/>
        </div>

        <div class="controls">
            <p>Prénom <span class="etoile">*</span></p>
            <input class="form-contact" type="number" name="prenom" value="<?php echo htmlspecialchars($c->get("prenom"));?>" required/>
        </div>

        <div>
            <input class="button" type="submit" value="Envoyer" />
        </div>
    </form>
</article>
