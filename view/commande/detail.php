<?php
for ($i=0; $i < sizeof($c); $i++) { 
	if(Session::is_admin()) {
	    echo '<a style="margin-right: 1%" href="index.php?controller=commande&action=delete&idCommande=' . rawurlencode($c[$i]->get("id_commande")) . '">Supprimer cette commande</a>';
	}

	$id_commande_html = htmlspecialchars($c[$i]->get("id_commande"));
	$login_html = htmlspecialchars($c[$i]->get("login"));
	$date_html = htmlspecialchars($c[$i]->get("date"));
	$id_sneaker_html = htmlspecialchars($c[$i]->get("s.id_sneaker"));
	$nom_sneaker_html = htmlspecialchars($c[$i]->get("nom_sneaker"));
	$prix_sneaker_html = htmlspecialchars($c[$i]->get("nom_sneaker"));
	$couleur_sneaker_html = htmlspecialchars($c[$i]->get("nom_sneaker"));
	$pointure_sneaker_html = htmlspecialchars($c[$i]->get("nom_sneaker"));
	$marque_sneaker_html = htmlspecialchars($c[$i]->get("nom_sneaker"));

	echo "<p> Id commande : $id_commande_html, login : $login_html, date : $date_html, Id sneaker : $id_commande_html, nom sneaker : $nom_sneaker_html, prix sneaker : $prix_sneaker_html, couleur sneaker : $couleur_sneaker_html, pointure sneaker : $pointure_sneaker_html, marque sneaker : $marque_sneaker_html </p>";
}
?>
