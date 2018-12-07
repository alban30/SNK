<?php
echo $links;
$id_sneaker_html = htmlspecialchars($s->get("id_sneaker"));
$nom_sneaker_html = htmlspecialchars($s->get("nom_sneaker"));
$prix_sneaker_html = htmlspecialchars($s->get("prix_sneaker"));
$couleur_sneaker_html = htmlspecialchars($s->get("couleur_sneaker"));
$pointure_sneaker_html = htmlspecialchars($s->get("pointure_sneaker"));
$marque_sneaker_html = htmlspecialchars($s->get("marque_sneaker"));

echo "<p> Id : $id_sneaker_html, nom : $nom_sneaker_html, prix : $prix_sneaker_html, couleur : $couleur_sneaker_html, pointure : $pointure_sneaker_html, marque : $marque_sneaker_html</p>";
?>
