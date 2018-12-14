<?php
for ($i=0; $i < sizeof($c); $i++) { 
	if(Session::is_admin()) {
	    echo '<a style="margin-right: 1%" href="index.php?controller=commande&action=delete&idCommande=' . rawurlencode($c[$i]->get("id_commande")) . '">Supprimer cette commande</a>';
	}

	$id_commande_html = htmlspecialchars($c[$i]->get("id_commande"));
	$login_html = htmlspecialchars($c[$i]->get("login"));
	$date_html = htmlspecialchars($c[$i]->get("date"));

	echo "<p> Id commande : $id_commande_html, login : $login_html, date : $date_html </p>";
}
?>
