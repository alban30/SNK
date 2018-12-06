<?php
echo '<p>L\'accessoire ' . rawurlencode($id_accessoire) . ' a bien été supprimé !</p>';
require File::build_path(array("view", "accessoire", "list.php"));
?>
