<?php
class Session {
    public static function is_user($login) {
        return (!empty($_SESSION["login"]) && ($_SESSION["login"] == $login));
    }

    public static function is_admin() {
        return (!empty($_SESSION["admin"]) && $_SESSION["admin"]);
	  }

    public static function getUserMenu() {
        if(isset($_SESSION["login"])) {
            echo '<li><a href="index.php?controller=utilisateur&action=read&login=' . $_SESSION["login"] . '">Mon compte</a></li><li><a href="index.php?controller=utilisateur&action=deconnect">Déconnexion</a></li>';
        }
        else {
            echo '<li><a href="index.php?controller=utilisateur&action=connect">Connexion</a></li>';
        }
    }


    public static function getUserCommande() {
        if(isset($_SESSION["login"])) {
            echo '<li><a href="index.php?controller=commande&action=myCommande">Mes Commandes</a></li>';
        }
    }


}
?>
