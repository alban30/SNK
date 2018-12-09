<article class="content form">
    <form method="<?php echo $method; ?>" action="index.php">
        <input type="hidden" name="controller" value="<?php echo static::$object;?>">
        <input type="hidden" name="action" value="<?php echo $target_action;?>">
        <legend>Configuration d'une sneaker</legend>
        <div class="controls">
            <p>ID Sneakers <span class="etoile">*</span></p>
            <input class="form-contact" type="number" name="idSneaker" value="<?php echo htmlspecialchars($s->get("id_sneaker"));?>" <?php echo $modifier; ?>/>
        </div>

        <div class="controls">
            <p>Modèle <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="nomSneaker" value="<?php echo htmlspecialchars($s->get("nom_sneaker"));?>" required/>
        </div>

        <div class="controls">
            <p>Prix <span class="etoile">*</span></p>
            <input class="form-contact" type="number" name="prixSneaker" step="0.01" value="<?php echo htmlspecialchars($s->get("prix_sneaker"));?>" required/>
        </div>

        <div class="controls">
            <p>Couleur <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="couleurSneaker" value="<?php echo htmlspecialchars($s->get("couleur_sneaker"));?>" required/>
        </div>

        <div class="controls">
            <p>Pointure <span class="etoile">*</span></p>
            <input class="form-contact" type="number" min="36" max="48" name="pointureSneaker" value="<?php echo htmlspecialchars($s->get("pointure_sneaker"));?>" required/>
        </div>

        <div class="controls">
            <p>Marque <span class="etoile">*</span></p>
            <input class="form-contact" type="text" name="marqueSneaker" value="<?php echo htmlspecialchars($s->get("marque_sneaker"));?>" required/>
        </div>

        <div>
            <input class="button" type="submit" value="Envoyer" />
        </div>
    </form>
</article>
