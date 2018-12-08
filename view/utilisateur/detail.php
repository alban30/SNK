<?php
if(Session::is_user($_SESSION["login"]) && !Session::is_admin()) {
    echo '<a style="margin-right: 1%" href="index.php?controller=utilisateur&action=update&login=' . rawurlencode($u->get("login")) . '">Modifier cet utilisateur</a>';
}
if(Session::is_admin()) {
    echo '<a style="margin-right: 1%" href="index.php?controller=utilisateur&action=delete&login=' . rawurlencode($u->get("login")) . '">Supprimer cet utilisateur</a><a style="margin-right: 1%" href="index.php?controller=utilisateur&action=update&login=' . rawurlencode($u->get("login")) . '">Modifier cet utilisateur</a>';
}

$login_html = htmlspecialchars($u->get("login"));
$nom_html = htmlspecialchars($u->get("nom"));
$prenom_html = htmlspecialchars($u->get("prenom"));

echo "<p> Utilisateur $login_html de nom $nom_html et de prenom $prenom_html </p>";
?>
