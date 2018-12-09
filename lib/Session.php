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

    public function creationPanier() {
            if (!isset($_SESSION["panier"])) {
                    $_SESSION["panier"] = array();
                    $_SESSION["panier"]["objet"] = array();
                    $_SESSION["panier"]["quantite"] = array();
                    $_SESSION["panier"]["cle"] = false;
            }
            return true;

    }

    public function isVerrouille(){
        if (isset($_SESSION["panier"]) && $_SESSION["panier"]["cle"]) {
                return true;
        }
        else {
                return false;
        }
    }

    public function viderPanier(){

        unset($_SESSION['panier']);
    }

    public  function montantPanier(){
            $prixtotal=0;
            for($i = 0; $i < count($_SESSION["panier"]["objet"]); $i++) {
                    $prixtotal += $_SESSION["panier"]["quantite"][$i] * $_SESSION["panier"]["objet"][$i];
            }
            return $prixtotal;
    }

}
?>
