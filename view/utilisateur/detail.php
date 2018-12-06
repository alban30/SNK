<?php
echo $links;

echo '<p> Utilisateur ' . htmlspecialchars($u->get("login")) . ' de nom ' . htmlspecialchars($u->get("nom")) . ' et de prenom ' . htmlspecialchars($u->get("prenom")) . '</p>';
?>
