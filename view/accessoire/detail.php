<?php
if(Session::is_admin()) {
    echo '<a style="margin-right: 1%" href="index.php?controller=accessoire&action=delete&idAccessoire=' . rawurlencode($a->get("id_accessoire")) . '">Supprimer cet accessoire</a><a style="margin-right: 1%" href="index.php?controller=accessoire&action=update&idAccessoire=' . rawurlencode($a->get("id_accessoire")) . '">Modifier cet accessoire</a>';
}

$id_accessoire_html = htmlspecialchars($a->get("id_accessoire"));
$nom_accessoire_html = htmlspecialchars($a->get("nom_accessoire"));
$prix_accessoire_html = htmlspecialchars($a->get("prix_accessoire"));
$marque_accessoire_html = htmlspecialchars($a->get("marque_accessoire"));

echo "<p> Id : $id_accessoire_html, nom : $nom_accessoire_html, prix : $prix_accessoire_html, marque : $marque_accessoire_html</p>";
?>
