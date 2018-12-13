<?php
if (!empty($newTabElement)){
		foreach ($newTabElement[0] as $id => $s) {
				$id_sneaker_html = htmlspecialchars($s);
				$sneaker = ModelSneaker::select($s);
				$nom_sneaker_html = htmlspecialchars($sneaker->get("nom_sneaker"));
				$prix_sneaker_html = htmlspecialchars($sneaker->get("prix_sneaker"));
				$couleur_sneaker_html = htmlspecialchars($sneaker->get("couleur_sneaker"));
				$pointure_sneaker_html = htmlspecialchars($sneaker->get("pointure_sneaker"));
				$marque_sneaker_html = htmlspecialchars($sneaker->get("marque_sneaker"));
				$quantite = htmlspecialchars($newTabElement[1][$id]);

		echo "<p> Id : $id_sneaker_html, nom : $nom_sneaker_html, prix : $prix_sneaker_html, couleur : $couleur_sneaker_html, pointure : $pointure_sneaker_html, marque : $marque_sneaker_html,quantité : $quantite</p>";

		}
	}
	else {
		echo "Votre panier est vide !";
	}

echo '<a style="margin-right: 1%" href="index.php?controller=panier&action=deletePanier">Vider le panier';

echo '<a style="margin-right: 1%" href="index.php?controller=commande&action=validate">Valider la commande';

?>



