<?php
echo '<p>La sneaker ' . rawurlencode($idSneaker) . ' a bien été supprimée !</p>';
require File::build_path(array("view", "sneaker", "list.php"));
?>
