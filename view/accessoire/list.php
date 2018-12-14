<?php
if(Session::is_admin()): ?>
    <div class="create">
        <a href="index.php?controller=accessoire&action=create"><input type="button" value="Créer un accessoire" /></a>
    </div>
<?php endif ?>
<article class="content product">
    <?php foreach ($tab_a as $a): ?>
        <div>
            <a href="index.php?controller=accessoire&action=read&idAccessoire=<?php echo rawurlencode($a->get("id_accessoire")) ?>">
              <img src="img/product/accessories/<?php echo $a->get("id_accessoire") ?>.png" alt="product <?php echo $a->get("id_accessoire") ?>">
              <h3><strong><?php echo $a->get("nom_accessoire") ?></strong></h3>
              <p><?php echo $a->get("marque_accessoire") ?></p>
              <p><i></i><?php echo $a->get("prix_accessoire") ?> €</p>
            </a>
        </div>
    <?php endforeach ?>
</article>
