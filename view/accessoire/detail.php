<?php
$id_accessoire_html = htmlspecialchars($a->get("id_accessoire"));
$nom_accessoire_html = htmlspecialchars($a->get("nom_accessoire"));
$prix_accessoire_html = htmlspecialchars($a->get("prix_accessoire"));
$marque_accessoire_html = htmlspecialchars($a->get("marque_accessoire"));
?>

<article class="content detailimg">
	<img src="img/product/accessories/<?php echo $id_accessoire_html ?>.png" alt="product <?php echo $id_accessoire_html ?>"></div>
</article>

<article class="content detail">
	<div>
		<?php if(Session::is_admin()) :?>
		<a href="index.php?controller=accessoire&action=delete&idAccessoire=<?php echo $id_accessoire_html ?>"><input type="button" value="Supprimer cet accessoire" /></a>
		<a href="index.php?controller=accessoire&action=update&idAccessoire=<?php echo $id_accessoire_html ?>"><input type="button" value="Modifier cet accessoire" /></a>
		<?php endif; ?>
	</div>
	<div class="espace">
		<div><?php echo $marque_accessoire_html ?></div>
		<div><?php echo $nom_accessoire_html ?></div>
		<div>............................................................................................................................</div>
		<div><?php echo $prix_accessoire_html ?> €</div>
	</div>
</article>

