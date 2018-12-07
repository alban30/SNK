<?php
$login_html = rawurlencode($login);

echo "<p>L'utilisateur $login_html a bien été supprimé !</p>";
require File::build_path(array("view", "utilisateur", "list.php"));
?>
