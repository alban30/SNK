<?php
echo $links;
$login_html = htmlspecialchars($u->get("login"));
$nom_html = htmlspecialchars($u->get("nom"));
$prenom_html = htmlspecialchars($u->get("prenom"));

echo "<p> Utilisateur $login_html de nom $nom_html et de prenom $prenom_html </p>";
?>
