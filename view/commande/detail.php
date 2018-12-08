<?php
if(Session::is_admin()) {
    echo '<a style="margin-right: 1%" href="index.php?controller=commande&action=delete&idCommande=' . rawurlencode($c->get("id_commande")) . '">Supprimer cette commande</a>';
}

$id_commande_html = htmlspecialchars($c->get("id_commande"));
$nom_sneaker_html = htmlspecialchars($c->get("nom_sneaker"));
$marque_sneaker_html = htmlspecialchars($c->get("marque_sneaker"));
$prix_sneaker_html = htmlspecialchars($c->get("prix_sneaker"));
$couleur_sneaker_html = htmlspecialchars($c->get("couleur_sneaker"));
$pointure_sneaker_html = htmlspecialchars($c->get("pointure_sneaker"));
$login_html = htmlspecialchars($c->get("login"));
$nom_html = htmlspecialchars($c->get("nom"));
$prenom_html = htmlspecialchars($c->get("prenom"));

echo "<p> Id commande : $id_commande_html, nom : $nom_sneaker_html, marque : $marque_sneaker_html, prix : $prix_sneaker_html, couleur : $couleur_sneaker_html, pointure : $pointure_sneaker_html, login : $login_html, nom : $nom_html, prenom : $prenom_html </p>";
?>
