<?php
$id_sneaker_html = htmlspecialchars($s->get("id_sneaker"));
$nom_sneaker_html = htmlspecialchars($s->get("nom_sneaker"));
$prix_sneaker_html = htmlspecialchars($s->get("prix_sneaker"));
$couleur_sneaker_html = htmlspecialchars($s->get("couleur_sneaker"));
$pointure_sneaker_html = htmlspecialchars($s->get("pointure_sneaker"));
$marque_sneaker_html = htmlspecialchars($s->get("marque_sneaker"));
?>

<article class="content detailimg">
	<img src="img/product/sneakers/<?php echo $id_sneaker_html ?>.png" alt="product <?php echo $id_sneaker_html ?>"></div>
</article>

<article class="content detail">
	<div>
		<?php if(Session::is_admin()) :?>
		<a href="index.php?controller=sneaker&action=delete&idSneaker=<?php echo $id_sneaker_html ?>"><input type="button" value="Supprimer cette sneaker" /></a>
		<a href="index.php?controller=sneaker&action=update&idSneaker=<?php echo $id_sneaker_html ?>"><input type="button" value="Modifier cette sneaker" /></a>
		<?php endif; ?>
	</div>
	<div class="espace">
		<div><?php echo $marque_sneaker_html ?></div>
		<div><?php echo $nom_sneaker_html ?></div>
		<div>............................................................................................................................</div>
		<div><?php echo $prix_sneaker_html ?> €</div>
		<div class="button button2"><a href="index.php?controller=panier&action=addPanier&idSneaker=<?php echo $id_sneaker_html;?>"><input type="button" value="Ajouter au panier" /></a></div>
	</div>
</article>
