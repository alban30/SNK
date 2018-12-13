<?php
if(Session::is_admin()) {
    echo '<a style="margin-right: 1%" href="index.php?controller=commande&action=commande&idAccessoire=' . rawurlencode($c->get("id_commande")) . '">Supprimer cette commande</a><a style="margin-right: 1%" href="index.php?controller=commande&action=update&idCommande=' . rawurlencode($c->get("id_commande")) . '">Modifier cette commande</a>';
}

$id_commande_html = htmlspecialchars($c->get("id_commande"));
$login_html = htmlspecialchars($c->get("login"));
$date_html = htmlspecialchars($c->get("date"));

echo "<p> Id commande : $id_commande_html, login : $login_html, date : $date_html </p>";
?>
