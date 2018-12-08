<?php
$id_commande_html = htmlspecialchars($idCommande);

echo "<p>La commande $id_commande_html a bien été supprimée !</p>";
require File::build_path(array("view", "commande", "list.php"));
?>
