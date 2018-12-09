<?php
if(Session::is_admin()) {
    echo '<a style="margin-right: 1%" href="index.php?controller=utilisateur&action=create">Créer un utilisateur</a>';
}
foreach ($tab_u as $u) {
    	echo '<p><a href="index.php?controller=utilisateur&action=read&login=' . rawurlencode($u->get("login")) . '"> Utilisateur d\'identifiant ' . htmlspecialchars($u->get("login")) . '.</a></p>';
}
?>
