<?php
require_once (File::build_path(array("model", "ModelPanier.php"))); // chargement du modèle

class ControllerPanier {
    
    protected static $object = "panier";

    public static function addPanier() {
            if(!isset($_COOKIE["panier"])) {

                    $tabsneaker = array($_GET["idSneaker"]);
                    setcookie("panier", serialize($tabsneaker) , time()+3600);
                    ControllerSneaker::readAll();
            }
            else {

                    $tabsneaker = unserialize($_COOKIE["panier"]);
                    array_push($tabsneaker,$_GET["idSneaker"]);
                    setcookie("panier", serialize($tabsneaker) , time()+3600);
                    ControllerSneaker::readAll();
            }
    }

    public static function afficheAllPanier() {
            if(isset($_COOKIE["panier"])) {
                    $newTabElement = self::generateQuantityTab();
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

    public static function totalquantitePanier(){
            $tabsneaker = unserialize($_COOKIE["panier"]);
            $quantite = sizeof($tabsneaker);
            return $quantite ;
            
            
    }

    public static function quantiteproduitPanier($idSneaker){
            $tabsneaker = unserialize($_COOKIE["panier"]);
            $max = sizeof($tabsneaker);
            $qtp = 0;
            for($i = 0; $i < $max;$i++){
                    if($idSneaker == $tabsneaker[i]){
                        $qtp++;
                    }

            }
            return $qtp;
            
            
    }

    public static function generateQuantityTab(){
        $tabsneaker = unserialize($_COOKIE["panier"]);
        $tabId = array();
        $tabQt = array();
        foreach($tabsneaker as $sneakerId){
            if(in_array($sneakerId, $tabId))
            {
                $tabQt[array_search($sneakerId, $tabId)]++;
            }
            else
            {
                array_push($tabId, $sneakerId);
                array_push($tabQt, 1);
            }
           
        }
        return array($tabId, $tabQt);
    }

}

?>
