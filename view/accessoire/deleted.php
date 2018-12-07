<?php
$id_accessoire_html = htmlspecialchars($idAccessoire);

echo "<p>L'accessoire $id_accessoire_html a bien été supprimé !</p>";
require File::build_path(array("view", "accessoire", "list.php"));
?>
