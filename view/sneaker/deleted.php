<?php
$id_sneaker_html = htmlspecialchars($idSneaker);

echo "<p>La sneaker $id_sneaker_html a bien été supprimée !</p>";
require File::build_path(array("view", "sneaker", "list.php"));
?>
