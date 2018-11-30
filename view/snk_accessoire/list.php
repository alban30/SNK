<?php
foreach ($tab_a as $a)
    echo '<p><a href="index.php?action=read&idAccessoire=' . rawurlencode($a->getIdAccessoire()) . '"> Accessoire d\'id ' . htmlspecialchars($a->getIdAccessoire()) . '.</a></p>';
?>
