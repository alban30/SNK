<?php
if(Session::is_admin()): ?>
    <div class="create">
        <a href="index.php?controller=utilisateur&action=create"><input type="button" value="Créer un utilisateur" /></a>
    </div>
<?php endif ?>
<article class="content product">
    <?php foreach ($tab_u as $u): ?>
        <div>
            <a href="index.php?controller=utilisateur&action=read&login=<?php echo rawurlencode($u->get("login")) ?>">
              <img src="img/product/user.png" alt="product <?php echo $u->get("login") ?>">
              <h3><strong><?php echo $u->get("login") ?></strong></h3>
              <p><?php echo $u->get("nom") ?></p>
              <p><?php echo $u->get("prenom") ?></p>
            </a>
        </div>
    <?php endforeach ?>
</article>

