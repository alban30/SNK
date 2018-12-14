<?php
$id_sneaker_html = htmlspecialchars($s->get("id_sneaker"));
$nom_sneaker_html = htmlspecialchars($s->get("nom_sneaker"));
$prix_sneaker_html = htmlspecialchars($s->get("prix_sneaker"));
$couleur_sneaker_html = htmlspecialchars($s->get("couleur_sneaker"));
$pointure_sneaker_html = htmlspecialchars($s->get("pointure_sneaker"));
$marque_sneaker_html = htmlspecialchars($s->get("marque_sneaker"));
?>

<!-- 	<?php
	echo "<p> Id : $id_sneaker_html, nom : $nom_sneaker_html, prix : $prix_sneaker_html, couleur : $couleur_sneaker_html, pointure : $pointure_sneaker_html, marque : $marque_sneaker_html</p>";

	echo '<a  href="index.php?controller=panier&action=addPanier&idSneaker=' . $id_sneaker_html . '">Ajouter cette sneaker au panier</a>';
	?> -->


<article class="content detail">
	<img src="img/product/sneakers/<?php echo $id_sneaker_html ?>.png" alt="product <?php echo $id_sneaker_html ?>"></div>
</article>

<article class="content">
	<div><?php if(Session::is_admin()) {echo '<a href="index.php?controller=sneaker&action=delete&idSneaker=' . rawurlencode($s->get("id_sneaker")) . '">Supprimer cette sneaker</a><a href="index.php?controller=sneaker&action=update&idSneaker=' . rawurlencode($s->get("id_sneaker")) . '">Modifier cette sneaker</a>';} ?></div>
	<div>
		<div><?php echo $marque_sneaker_html ?></div>
		<div><?php echo $nom_sneaker_html ?></div>
		<div><?php echo $prix_sneaker_html ?> €</div>
		<div class="button button2"><a  href="index.php?controller=panier&action=addPanier&idSneaker=<?php echo $id_sneaker_html;?>"><input type="button" value="Ajouter au panier" /></a></div>
	</div>
</article>
