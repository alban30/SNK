<?php
if(Session::is_admin()) {
    echo '<a style="margin-right: 1%" href="index.php?controller=sneaker&action=create">Créer une sneaker</a>';
}
foreach ($tab_s as $s) {
    echo '<p><a href="index.php?controller=sneaker&action=read&idSneaker=' . rawurlencode($s->get("id_sneaker")) . '"> Sneaker d\'id ' . htmlspecialchars($s->get("id_sneaker")) . '.</a></p>';
}
?>
