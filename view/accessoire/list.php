<?php
if(Session::is_admin()) {
    echo '<a style="margin-right: 1%" href="index.php?controller=accessoire&action=create">Créer un accessoire</a>';
}
foreach ($tab_a as $a) {
    	echo '<p><a href="index.php?controller=accessoire&action=read&idAccessoire=' . rawurlencode($a->get("id_accessoire")) . '"> Accessoire d\'id ' . htmlspecialchars($a->get("id_accessoire")) . '.</a></p>';
}
?>
