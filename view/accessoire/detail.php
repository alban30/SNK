<?php
echo $links;

echo '<p> Id : ' . htmlspecialchars($a->get("id_accessoire")) . ', nom : ' . htmlspecialchars($a->get("nom_accessoire")) . ', prix : ' . htmlspecialchars($a->get("prix_accessoire")) . ', marque : ' . htmlspecialchars($a->get("marque_accessoire")) . '</p>';
?>
