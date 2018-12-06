<?php
if(Session::is_admin()) {
		echo '<a style="margin-right: 1%" href="index.php?controller=sneaker&action=delete&id_sneaker=' . htmlspecialchars($v->get("id_sneaker")) . '">Supprimer cette sneaker</a>';
		echo '<a style="margin-right: 1%" href="index.php?controller=sneaker&action=update&id_sneaker=' . htmlspecialchars($v->get("id_sneaker")) . '">Modifier cette sneaker</a>';
}
if(Session::is_user($_GET["login"]) && !Session::is_admin()) {
		echo '<a style="margin-right: 1%" href="index.php?controller=sneaker&action=update&id_sneaker=' . htmlspecialchars($u->get("id_sneaker")) . '">Modifier cette sneaker</a>';
}
echo '<p> Id : ' . htmlspecialchars($s->get("id_sneaker")) . ', nom : ' . htmlspecialchars($s->get("nom_sneaker")) . ', prix : ' . htmlspecialchars($s->get("prix_sneaker")) . ', couleur : ' . htmlspecialchars($s->get("couleur_sneaker")) . ', pointure : ' . htmlspecialchars($s->get("pointure_sneaker")) . ', marque : ' . htmlspecialchars($s->get("marque_sneaker")) . '</p>';
?>
