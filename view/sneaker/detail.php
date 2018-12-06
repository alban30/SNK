<?php
echo $links;

echo '<p> Id : ' . htmlspecialchars($s->get("id_sneaker")) . ', nom : ' . htmlspecialchars($s->get("nom_sneaker")) . ', prix : ' . htmlspecialchars($s->get("prix_sneaker")) . ', couleur : ' . htmlspecialchars($s->get("couleur_sneaker")) . ', pointure : ' . htmlspecialchars($s->get("pointure_sneaker")) . ', marque : ' . htmlspecialchars($s->get("marque_sneaker")) . '</p>';
?>
