<?php
echo '<p>La sneaker ' . rawurlencode($id_sneaker) . ' a bien été supprimée !</p>';
require File::build_path(array("view", "sneaker", "list.php"));
?>
