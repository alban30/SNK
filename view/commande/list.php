<?php
foreach ($tab_c as $c) {
    	echo '<p><a href="index.php?controller=commande&action=read&idCommande=' . rawurlencode($c->get("id_commande")) . '"> Commande d\'id ' . htmlspecialchars($c->get("id_commande")) . '.</a></p>';
}
?>
