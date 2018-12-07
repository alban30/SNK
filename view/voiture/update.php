<form method="<?php echo $method; ?>" action="index.php">
        <input type="hidden" name="controller" value="<?php echo static::$object;?>">
        <input type="hidden" name="action" value="<?php echo $target_action;?>">
        <fieldset>
                <legend>Mon formulaire :</legend>
                <p>
                        <label for="immat_id">Immatriculation</label> :
                        <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" value="<?php echo htmlspecialchars($v->get("immatriculation"));?>" <?php echo $modifier; ?>/>
                </p>

                <p>
                        <label for="immat_id">Marque</label> :
                        <input type="text" placeholder="Ex : Renault" name="marque" id="marque" value="<?php echo htmlspecialchars($v->get("marque"));?>" required/>
                </p>

                <p>
                        <label for="immat_id">Couleur</label> :
                        <input type="text" placeholder="Ex : Bleu" name="couleur" id="couleur" value="<?php echo htmlspecialchars($v->get("couleur"));?>" required/>
                </p>

                <p>
                        <input type="submit" value="Envoyer" />
                </p>
        </fieldset>
</form>
