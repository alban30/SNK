<form method="<?php echo $method; ?>" action="index.php?controller=accessoire&action=<?php echo $target_action;?>">
        <fieldset>
                <legend>Mon formulaire :</legend>
                <p>
                        <label for="id_accessoire">ID Accessoire</label> :
                        <input type="number" placeholder="Ex : 1" name="id_accessoire" id="id_accessoire" value="<?php echo htmlspecialchars($a->get("id_accessoire"));?>" <?php echo $modifier; ?>/>
                </p>

                <p>
                        <label for="nom_accessoire">Nom Accessoire</label> :
                        <input type="text" placeholder="Ex : Stan Smith" name="nom_accessoire" id="nom_accessoire" value="<?php echo htmlspecialchars($a->get("nom_accessoire"));?>" required/>
                </p>

                <p>
                        <label for="prix_accessoire">Prix Accessoire</label> :
                        <input type="number" placeholder="Ex : 100" name="prix_accessoire" id="prix_accessoire" value="<?php echo htmlspecialchars($a->get("prix_accessoire"));?>" required/>
                </p>

                <p>
                        <label for="marque_accessoire">Marque Accessoire</label> :
                        <input type="number" placeholder="Ex : Nike" name="marque_accessoire" id="marque_accessoire" value="<?php echo htmlspecialchars($a->get("marque_accessoire"));?>" required/>
                </p>

                <p>
                        <input type="hidden" value="<?php echo static::$object;?>" />
                        <input type="submit" value="Envoyer" />
                </p>
        </fieldset>
</form>
