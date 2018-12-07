<?php
echo $links;
$id_accessoire_html = htmlspecialchars($a->get("id_accessoire"));
$nom_accessoire_html = htmlspecialchars($a->get("nom_accessoire"));
$prix_accessoire_html = htmlspecialchars($a->get("prix_accessoire"));
$marque_accessoire_html = htmlspecialchars($a->get("marque_accessoire"));

echo "<p> Id : $id_accessoire_html, nom : $nom_accessoire_html, prix : $prix_accessoire_html, marque : $marque_accessoire_html</p>";
?>
