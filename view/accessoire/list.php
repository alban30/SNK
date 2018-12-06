<?php
foreach ($tab_a as $a) {
    	echo '<p><a href="index.php?controller=accessoire&action=read&idAccessoire=' . rawurlencode($a->get("id_accessoire")) . '"> Accessoire d\'id ' . htmlspecialchars($a->get("id_accessoire")) . '.</a></p>';
}
?>
