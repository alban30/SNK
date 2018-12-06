<?php
echo '<p>L\'accessoire ' . rawurlencode($idAccessoire) . ' a bien été supprimé !</p>';
require File::build_path(array("view", "accessoire", "list.php"));
?>
