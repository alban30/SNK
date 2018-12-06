<form method="<?php echo $method; ?>" action="index.php?controller=sneaker&action=<?php echo $target_action;?>">
        <fieldset>
                <legend>Mon formulaire :</legend>
                <p>
                        <label for="idSneaker">ID Sneaker</label> :
                        <input type="number" placeholder="Ex : 1" name="idSneaker" id="idSneaker" value="<?php echo htmlspecialchars($s->get("id_sneaker"));?>" <?php echo $modifier; ?>/>
                </p>

                <p>
                        <label for="nomSneaker">Nom Sneaker</label> :
                        <input type="text" placeholder="Ex : Stan Smith" name="nomSneaker" id="nomSneaker" value="<?php echo htmlspecialchars($s->get("nom_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="prixSneaker">Prix Sneaker</label> :
                        <input type="number" placeholder="Ex : 100" name="prixSneaker" id="prixSneaker" value="<?php echo htmlspecialchars($s->get("prix_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="couleurSneaker">Couleur Sneaker</label> :
                        <input type="text" placeholder="Ex : Blanche" name="couleurSneaker" id="couleurSneaker" value="<?php echo htmlspecialchars($s->get("couleur_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="pointureSneaker">Pointure Sneaker</label> :
                        <input type="number" placeholder="Ex : 42" name="pointureSneaker" id="pointureSneaker" value="<?php echo htmlspecialchars($s->get("pointure_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="marqueSneaker">Marque Sneaker</label> :
                        <input type="text" placeholder="Ex : Adidas" name="marqueSneaker" id="marqueSneaker" value="<?php echo htmlspecialchars($s->get("marque_sneaker"));?>" required/>
                </p>

                <p>
                        <input type="hidden" value="<?php echo static::$object;?>" />
                        <input type="submit" value="Envoyer" />
                </p>
        </fieldset>
</form>
