<?php
$id_sneaker_html = htmlspecialchars($s->get("id_sneaker"));
$nom_sneaker_html = htmlspecialchars($s->get("nom_sneaker"));
$prix_sneaker_html = htmlspecialchars($s->get("prix_sneaker"));
$couleur_sneaker_html = htmlspecialchars($s->get("couleur_sneaker"));
$pointure_sneaker_html = htmlspecialchars($s->get("pointure_sneaker"));
$marque_sneaker_html = htmlspecialchars($s->get("marque_sneaker"));

if(Session::is_admin()) {
	echo '<a style="margin-right: 1%" href="index.php?controller=sneaker&action=delete&idSneaker=' . rawurlencode($s->get("id_sneaker")) . '">Supprimer cette sneaker</a><a style="margin-right: 1%" href="index.php?controller=sneaker&action=update&idSneaker=' . rawurlencode($s->get("id_sneaker")) . '">Modifier cette sneaker</a>';
}
?>

<article class="content detail">
<!-- 	<?php
	echo "<p> Id : $id_sneaker_html, nom : $nom_sneaker_html, prix : $prix_sneaker_html, couleur : $couleur_sneaker_html, pointure : $pointure_sneaker_html, marque : $marque_sneaker_html</p>";

	echo '<a  href="index.php?controller=panier&action=addPanier&idSneaker=' . $id_sneaker_html . '">Ajouter cette sneaker au panier</a>';
	?> -->
	<div><img src="img/product/sneakers/<?php echo $id_sneaker_html ?>.png" alt="product <?php echo $id_sneaker_html ?>"></div>
	<div>cc</div>
	<div>cc</div>

</article>
