<article class="content form">
    <form method="<?php echo $method; ?>" action="index.php">
        <input type="hidden" name="controller" value="<?php echo static::$object;?>">
        <input type="hidden" name="action" value="<?php echo $target_action;?>">
        <legend>Configuration d'un accessoire</legend>
        <div class="controls">
            <p>ID Accessoire <span class="etoile">*</span></p>
            <input class="form-contact" type="number" placeholder="Ex : 1" name="idAccessoire" value="<?php echo htmlspecialchars($a->get("id_accessoire"));?>" <?php echo $modifier; ?>/>
        </div>

        <div class="controls">
            <p>Nom accessoire <span class="etoile">*</span></p>
            <input class="form-contact" type="text" placeholder="Ex : Crep" name="nomAccessoire" value="<?php echo htmlspecialchars($a->get("nom_accessoire"));?>" required/>
        </div>

        <div class="controls">
            <p>Prix accessoire <span class="etoile">*</span></p>
            <input class="form-contact" type="number" placeholder="Ex : 100" name="prixAccessoire" value="<?php echo htmlspecialchars($a->get("prix_accessoire"));?>" required/>
        </div>

        <div class="controls">
            <p>Marque accessoire <span class="etoile">*</span></p>
            <input class="form-contact" type="text" placeholder="Ex : Nike" name="marqueAccessoire" value="<?php echo htmlspecialchars($a->get("marque_accessoire"));?>" required/>
        </div>

        <div>
            <input class="button" type="submit" value="Envoyer" />
        </div>
    </form>
</article>
