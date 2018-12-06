<form method="<?php echo $method; ?>" action="index.php?action=<?php echo $target_action;?>">
        <fieldset>
                <legend>Mon formulaire :</legend>
                <p>
                        <label for="id_sneaker">ID Sneaker</label> :
                        <input type="number" placeholder="Ex : 1" name="id_sneaker" id="id_sneaker" value="<?php echo htmlspecialchars($s->get("id_sneaker"));?>" <?php echo $modifier; ?>/>
                </p>

                <p>
                        <label for="nom_sneaker">Nom Sneaker</label> :
                        <input type="text" placeholder="Ex : Stan Smith" name="nom_sneaker" id="nom_sneaker" value="<?php echo htmlspecialchars($s->get("nom_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="prix_sneaker">Prix Sneaker</label> :
                        <input type="number" placeholder="Ex : 100" name="prix_sneaker" id="prix_sneaker" value="<?php echo htmlspecialchars($s->get("prix_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="couleur_sneaker">Couleur Sneaker</label> :
                        <input type="text" placeholder="Ex : Blanche" name="couleur_sneaker" id="couleur_sneaker" value="<?php echo htmlspecialchars($s->get("couleur_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="pointure_sneaker">Pointure Sneaker</label> :
                        <input type="number" placeholder="Ex : 42" name="pointure_sneaker" id="pointure_sneaker" value="<?php echo htmlspecialchars($s->get("pointure_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="marque_sneaker">Marque Sneaker</label> :
                        <input type="number" placeholder="Ex : Adidas" name="marque_sneaker" id="marque_sneaker" value="<?php echo htmlspecialchars($s->get("marque_sneaker"));?>" required/>
                </p>

                <p>
                        <input type="hidden" value="<?php echo static::$object;?>" />
                        <input type="submit" value="Envoyer" />
                </p>
        </fieldset>
</form>
