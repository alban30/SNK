<form method="<?php echo $method; ?>" action="index.php">
        <input type="hidden" name="controller" value="<?php echo static::$object;?>">
        <input type="hidden" name="action" value="<?php echo $target_action;?>">
        <fieldset>
                <legend>Mon formulaire :</legend>
                <p>
                        <label for="idAccessoire">ID Accessoire</label> :
                        <input type="number" placeholder="Ex : 1" name="idAccessoire" id="idAccessoire" value="<?php echo htmlspecialchars($a->get("id_accessoire"));?>" <?php echo $modifier; ?>/>
                </p>

                <p>
                        <label for="nomAccessoire">Nom Accessoire</label> :
                        <input type="text" placeholder="Ex : Crep" name="nomAccessoire" id="nomAccessoire" value="<?php echo htmlspecialchars($a->get("nom_accessoire"));?>" required/>
                </p>

                <p>
                        <label for="prixAccessoire">Prix Accessoire</label> :
                        <input type="number" placeholder="Ex : 100" name="prixAccessoire" id="prixAccessoire" value="<?php echo htmlspecialchars($a->get("prix_accessoire"));?>" required/>
                </p>

                <p>
                        <label for="marqueAccessoire">Marque Accessoire</label> :
                        <input type="text" placeholder="Ex : Nike" name="marqueAccessoire" id="marqueAccessoire" value="<?php echo htmlspecialchars($a->get("marque_accessoire"));?>" required/>
                </p>

                <p>
                        <input type="hidden" value="<?php echo static::$object;?>" />
                        <input type="submit" value="Envoyer" />
                </p>
        </fieldset>
</form>
