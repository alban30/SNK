<form method="<?php echo $method; ?>" action="index.php">
        <input type="hidden" name="controller" value="<?php echo static::$object;?>">
        <input type="hidden" name="action" value="<?php echo $target_action;?>">
        <fieldset>
                <legend>Mon formulaire :</legend>
                <p>
                        <label for="idCommande">ID Commande</label> :
                        <input type="number" placeholder="Ex : 1" name="idCommande" id="idCommande" value="<?php echo htmlspecialchars($c->get("id_commande"));?>" <?php echo $modifier; ?>/>
                </p>

                <p>
                        <label for="nomSneaker">Nom Sneaker</label> :
                        <input type="text" placeholder="Ex : Stan Smith" name="nomSneaker" id="nomSneaker" value="<?php echo htmlspecialchars($c->get("nom_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="marqueSneaker">Marque Sneaker</label> :
                        <input type="text" placeholder="Ex : Adidas" name="marqueSneaker" id="marqueSneaker" value="<?php echo htmlspecialchars($c->get("marque_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="prixSneaker">Prix Sneaker</label> :
                        <input type="number" placeholder="Ex : 100" name="prixSneaker" id="prixSneaker" value="<?php echo htmlspecialchars($c->get("prix_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="couleurSneaker">Couleur Sneaker</label> :
                        <input type="text" placeholder="Ex : Blanche" name="couleurSneaker" id="couleurSneaker" value="<?php echo htmlspecialchars($c->get("couleur_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="pointureSneaker">Pointure Sneaker</label> :
                        <input type="number" placeholder="Ex : 42" name="pointureSneaker" id="pointureSneaker" value="<?php echo htmlspecialchars($c->get("pointure_sneaker"));?>" required/>
                </p>

                <p>
                        <label for="login">Login</label> :
                        <input type="text" placeholder="Ex : Bob" name="login" id="login" value="<?php echo htmlspecialchars($c->get("login"));?>" required/>
                </p>

                <p>
                        <label for="nom">Nom</label> :
                        <input type="text" placeholder="Ex : Bobber" name="nom" id="nom" value="<?php echo htmlspecialchars($c->get("nom"));?>" required/>
                </p>

                <p>
                        <label for="prenom">Prenom</label> :
                        <input type="text" placeholder="Ex : Bobby" name="prenom" id="prenom" value="<?php echo htmlspecialchars($c->get("prenom"));?>" required/>
                </p>

                <p>
                        <input type="submit" value="Envoyer" />
                </p>
        </fieldset>
</form>
