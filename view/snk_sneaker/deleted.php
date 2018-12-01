<?php
echo '<p>Les Sneakers ' . rawurlencode($idSneaker) . ' ont bien été supprimées !</p>';
require File::build_path(array("view", "snk_sneaker", "list.php"));
?>
