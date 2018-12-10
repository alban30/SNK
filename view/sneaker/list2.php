<?php
if(Session::is_admin()): ?>
    <div class="">
        <a href="index.php?controller=sneaker&action=create">Créer une sneaker</a>
    </div>
<?php endif ?>
<?php
foreach ($tab_s as $s): ?>
    <article class="content product">
        <?php
        $i = 0;
        if($i%3 == 0):
        ?>
        <div class="contenu">
            <a href="index.php?controller=sneaker&action=read&idSneaker=<?php echo rawurlencode($s->get("id_sneaker")) ?>">
              <img src="img/product/<?php echo $s->get("id_sneaker") ?>.png" alt="product <?php echo $s->get("id_sneaker") ?>">
              <h3><strong><?php echo $s->get("nom_sneaker") ?></strong></h3>
              <p><?php echo $s->get("marque_sneaker") ?></p>
              <p><i></i><?php echo $s->get("prix_sneaker") ?> €</p>
            </a>
        </div>
        <?php
        endif;
        $i++;
        ?>
    </article>
<?php endforeach ?>
