<?php
require_once (File::build_path(array("model", "ModelCommande.php"))); // chargement du modèle
require_once (File::build_path(array("controller", "ControllerUtilisateur.php")));
require_once (File::build_path(array("controller", "ControllerPanier.php")));



class ControllerCommande {
    protected static $object = "commande";

    public static function readAll() {
            $tab_c = ModelCommande::selectAll();

            $pagetitle = "Liste des commandes";
            $view = "list";

            require (File::build_path(array("view", "view.php")));
    }

    public static function read() {
            $c = ModelCommande::select(myGet("idCommande"));

            if(!$c) {
                    $pagetitle = "Erreur";
                    $view = "error";
            }
            else {
                    $pagetitle = "Affichage d'une commande";
                    $view = "detail";
            }

            require (File::build_path(array("view", "view.php")));
    }

    public static function create() {
            if(Session::is_admin()) {
                    $c = new ModelCommande();
                    $modifier = "required";
                    $target_action = "created";

                    if(!Conf::getDebug()) {
                            $method = "post";
                    }
                    else {
                            $method = "get";
                    }

                    if(!$c) {
                            $pagetitle = "Erreur";
                            $view = "error";
                    }
                    else {
                            $pagetitle = "Modification d'une commande";
                            $view = "update";
                    }

                    require (File::build_path(array("view", "view.php")));
            }
            else {
                    self::readAll();
            }
    }

    public static function created() {
            if(Session::is_admin()) {
                ModelCommande::save(array("id_commande"=>myGet("idCommande"), "id_sneaker"=>myGet("idSneaker"), "date"=>myGet("date")));
                $tab_c = ModelCommande::selectAll();

                $pagetitle = "Commande créée";
                $view = "created";

                require (File::build_path(array("view", "view.php")));
            }
            else {
                    self::readAll();
            }
    }

    public static function delete() {
            if(Session::is_admin()) {
                    $idCommande = myGet("idCommande");
                    ModelCommande::delete($idCommande);
                    $tab_c = ModelCommande::selectAll();

                    if(!$idCommande) {
                            $pagetitle = "Erreur";
                            $view = "error";
                    }
                    else {
                            $pagetitle = "Suppression d'une commande";
                            $view = "deleted";
                    }

                    require (File::build_path(array("view", "view.php")));
            }
            else {
                    self::read();
            }
    }

    public static function validate() {
        //On enregistre la commande dans la bdd
        if(isset($_COOKIE) && isset($_SESSION["login"])) {
            $arraycommande = array(
                'login' => $_SESSION["login"],
                'date' => date("Y-m-d H:i:s"),
            );
            ModelCommande::save($arraycommande);
            $res = Model::$pdo->lastInsertId();
            $tab = unserialize($_COOKIE['panier']);
            $newTabElement = ControllerPanier::generateQuantityTab();
            for ($i=0; $i < sizeof($newTabElement[0]); $i++) { 
                $arraycommande = array(
                    'idSneaker' => $newTabElement[0][$i],
                    'idCommande' => $res,
                    'quantite' => $newTabElement[1][$i],
                );

                ModelCommande::saveCommander($arraycommande);                
            }
            $pagetitle = "Commande effectuée !";
            $view = "validate";
            require (File::build_path(array("view", "view.php")));
            setcookie ("panier", "", time() - 1);
        }
        else {
            ControllerUtilisateur::connect();
        }
    }

    public static function myCommande() {
        if(Session::is_user(myGet("login")) || Session::is_admin()) {
            $c = ModelCommande::getCommandeByLogin($_SESSION["login"]);

            if(empty($c)) {
                    $pagetitle = "CommandeVide";
                    $view = "commandeVide";
            }
            else {
                    $pagetitle = "Affichage d'une commande";
                    $view = "detail";
            }
        }
        else {
            ControllerUtilisateur::connect();
        }
        
        require (File::build_path(array("view", "view.php")));
    }
    
}
?>
