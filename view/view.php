<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/styles.css" media="all"/>
        <title><?php echo $pagetitle; ?></title>
    </head>
    <body>
        <header>
            <nav>
                <div class="top">
                    <a>3630</a>
                </div>
                <div class="primary">
                    <a><img alt="Salut" src="img/logo.png"/></a>
                    <ul class="btw">
                        <li>
                            <a class="ici" href="index.php">Accueil</a>
                        </li>
                        <li>
                            <a href="index.php?controller=sneaker&action=readAll">Sneakers</a>
                        </li>
                        <li>
                            <a href="index.php?controller=accessoire&action=readAll">Accessoires</a>
                        </li>
                        <li>
                            <a href="index.php?controller=accessoire&action=readAll">Panier</a>
                        </li>
                        <li>
                            <a href="index.php?controller=commande&action=readAll">Commandes</a>
                        </li>
                        <?php Session::getUserMenu(); ?>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
              <?php
              // Si $controleur='voiture' et $view='list',
              // alors $filepath="/chemin_du_site/view/voiture/list.php"
              $filepath = File::build_path(array("view", static::$object, "$view.php"));
              require $filepath;
              ?>
        </main>

        <footer>
            <a href="https://www.facebook.com/" target="_blank">
                <img class="social" src="img/icon/facebook.png" alt="fb">
            </a>
            <a href="https://twitter.com/" target="_blank">
                <img class="social" src="img/icon/twitter.png" alt="twitter">
            </a>
            <a href="https://www.google.fr/" target="_blank">
                <img class="social" src="img/icon/google.png" alt="google">
            </a>
            <p>Made with <img src="img/heart.png" alt="heart"> in Montpellier</p>
            <p>&copy; SNK - World Sneakers 2018-2019 | Tous droits réservés.</p>
        </footer>
    </body>
</html>
