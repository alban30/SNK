<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <title><?php echo $pagetitle; ?></title>
    </head>
    <body>
        <header>
            <nav>
                <div class="top">
                    <ul class="social left">
                        <li>
                          <a href="https://www.facebook.com/" target="_blank">
                              <img src="img/icon/facebook.png" alt="fb">
                          </a>
                        </li>
                        <li>
                          <a href="https://twitter.com/" target="_blank">
                              <img src="img/icon/twitter.png" alt="twitter">
                          </a>
                        </li>
                        <li>
                          <a href="https://www.google.fr/" target="_blank">
                              <img src="img/icon/google.png" alt="google">
                          </a>
                        </li>
                    </ul>
                    <ul class="menu left">
                        <li>
                            <a>0605040302</a>
                        </li>
                    </ul>
                    <ul class="menu right">
                        <?php Session::getUserMenu(); ?>
                        <?php Session::getUserCommande(); ?>

                        <li>
                            <a href="index.php?controller=panier&action=afficheAllPanier"><i class="material-icons">shopping_cart</i></a>
                        </li>
                    </ul>
                </div>
                <div class="primary">
                    <a><img alt="Salut" src="img/logo.png"/></a>
                    <ul class="menu right">
                        <li>
                            <a class="<?php if(static::$object == "accueil") { echo "ici"; } ?>" href="index.php">Accueil</a>
                        </li>
                        <li>
                            <a class="<?php if(static::$object == "sneaker") { echo "ici"; } ?>" href="index.php?controller=sneaker&action=readAll">Sneakers</a>
                        </li>
                        <li>
                            <a class="<?php if(static::$object == "accessoire") { echo "ici"; } ?>" href="index.php?controller=accessoire&action=readAll">Accessoires</a>
                        </li>
                        <?php
                        if(Session::is_admin()) {
                            if(static::$object == "utilisateur") {
                                echo '<li><a class="ici" href="index.php?controller=utilisateur&action=readAll">Utilisateurs</a></li>';
                            }
                            else {
                                echo '<li><a href="index.php?controller=utilisateur&action=readAll">Utilisateurs</a></li>';
                            }
                        }
                        ?>
                        <li>
                            <a class="<?php if(static::$object == "contact") { echo "ici"; } ?>" href="index.php?controller=contact&action=readAll">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="<?php if($view == "list" || static::$object == "commande" || static::$object == "panier"){echo "";} else{echo "wrapper";} ?>">
              <?php
              // Si $controleur='voiture' et $view='list',
              // alors $filepath="/chemin_du_site/view/voiture/list.php"
              $filepath = File::build_path(array("view", static::$object, "$view.php"));
              require $filepath;
              ?>
        </main>

        <footer>
            <a href="https://www.facebook.com/" target="_blank">
                <img src="img/icon/facebook.png" alt="fb">
            </a>
            <a href="https://twitter.com/" target="_blank">
                <img src="img/icon/twitter.png" alt="twitter">
            </a>
            <a href="https://www.google.fr/" target="_blank">
                <img src="img/icon/google.png" alt="google">
            </a>
            <p>Made with <img src="img/heart.png" alt="heart"> in Montpellier</p>
            <p>&copy; SNK - World Sneakers 2018-2019 | Tous droits réservés.</p>
        </footer>
    </body>
</html>
