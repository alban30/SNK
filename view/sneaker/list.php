<?php
foreach ($tab_s as $s)
    echo '<p><a href="index.php?action=read&ids=' . rawurlencode($s->getIdSneaker()) . '"> Sneaker d\'id ' . htmlspecialchars($s->getIdSneaker()) . '.</a></p>';
?>
