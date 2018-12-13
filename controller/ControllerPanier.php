<?php
require_once (File::build_path(array("model", "ModelPanier.php"))); // chargement du modèle

class ControllerPanier {
    
    protected static $object = "panier";

    public static function addPanier() {
            if(!isset($_COOKIE["panier"])) {

                    $tabsneaker = array($_GET["idSneaker"]);
                    setcookie("panier", serialize($tabsneaker) , time()+3600);
                    ControllerAccueil::readAll();
            }
            else {

                    $tabsneaker = unserialize($_COOKIE["panier"]);
                    array_push($tabsneaker,$_GET["idSneaker"]);
                    setcookie("panier", serialize($tabsneaker) , time()+3600);
                    ControllerAccueil::readAll();
            }
    }

    public static function afficheAllPanier() {
            if(isset($_COOKIE["panier"])) {
                    $tabsneaker = unserialize($_COOKIE["panier"]);
                    $sneaker = ModelPanier::getPanier($tabsneaker);
                    $controller = "panier";
                    $pagetitle = "Mon panier";
                    $view = "panier";
                    require File::build_path(array("view", "view.php"));
            }
            else {
                    $pagetitle = "Panier";
                    $view = "error";
                    require (File::build_path(array("view", "view.php")));
            }

    }


    public static function deletePanier(){
            setcookie ("panier", "", time() - 1);
            ControllerAccueil::readAll();
            
    }
}

?>
