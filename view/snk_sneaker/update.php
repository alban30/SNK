<form method="post" action="index.php?action=<?php echo $target_action;?>">
  <fieldset>
    <legend>Mise à jour des Sneakers :</legend>

    <p>
      <label for="sneaker_id">Id Sneaker</label> :
      <input type="text" placeholder="Ex : 1" name="id_sneaker" id="sneaker_id" value="<?php echo htmlspecialchars($s->getIdSneaker());?>" <?php echo $modifier; ?>/>
    </p>

    <p>
      <label for="sneaker_id">Nom Sneaker</label> :
      <input type="text" placeholder="Ex : Nike" name="nom_sneaker" id="sneaker_nom" value="<?php echo htmlspecialchars($s->getNomSneaker());?>" required/>
    </p>

    <p>
      <label for="sneaker_id">Prix Sneaker</label> :
      <input type="text" placeholder="Ex : 13.99" name="prix_sneaker" id="sneaker_prix" value="<?php echo htmlspecialchars($s->getPrixSneaker());?>" required/>
    </p>
    <p>
      <label for="sneaker_id">Couleur Sneaker</label> :
      <input type="text" placeholder="Ex : Blanche" name="couleur_sneaker" id="sneaker_couleur" value="<?php echo htmlspecialchars($s->getCouleurSneaker());?>" <?php echo $modifier; ?>/>
    </p>

    <p>
      <label for="sneaker_id">Pointure Sneaker</label> :
      <input type="text" placeholder="Ex : 42" name="pointure_sneaker" id="sneaker_pointure" value="<?php echo htmlspecialchars($s->getPointureSneaker());?>" required/>
    </p>

    <p>
      <label for="sneaker_id">Id Marque</label> :
      <input type="text" placeholder="Ex : 1" name="id_marque" id="marque_id" value="<?php echo htmlspecialchars($s->getIdMarque());?>" required/>
    </p>

    <p>
      <input type="hidden" value="<?php echo static::$object;?>" />
      <input type="submit" value="Envoyer" />
    </p>

  </fieldset>
</form>
