<?php
require_once (File::build_path(array("model", "ModelSneaker.php"))); // chargement du modèle

class ControllerSneaker {
    protected static $object = "sneaker";

    public static function readAll() {
            $tab_s = ModelSneaker::selectAll();

            $pagetitle = "Liste des sneakers";
            $view = "list";

            require (File::build_path(array("view", "view.php")));
    }

    public static function read() {
            $s = ModelSneaker::select(myGet("idSneaker"));

            if(!$s) {
                    $pagetitle = "Erreur";
                    $view = "error";
            }
            else {
                    $pagetitle = "Affichage d'une sneaker";
                    $view = "detail";
            }

            require (File::build_path(array("view", "view.php")));
    }

    public static function create() {
            if(Session::is_admin()) {
                    $s = new ModelSneaker();
                    $modifier = "required";
                    $target_action = "created";

                    if(!Conf::getDebug()) {
                            $method = "post";
                    }
                    else {
                            $method = "get";
                    }

                    if(!$s) {
                            $pagetitle = "Erreur";
                            $view = "error";
                    }
                    else {
                            $pagetitle = "Modification d'une sneaker";
                            $view = "update";
                    }

                    require (File::build_path(array("view", "view.php")));
            }
            else {
                    self::readAll();
            }
    }

    public static function created() {
            ModelSneaker::save(array("id_sneaker"=>myGet("idSneaker"), "nom_sneaker"=>myGet("nomSneaker"), "prix_sneaker"=>myGet("prixSneaker"), "couleur_sneaker"=>myGet("couleurSneaker"), "pointure_sneaker"=>myGet("pointureSneaker"), "marque_sneaker"=>myGet("marqueSneaker")));
            $tab_s = ModelSneaker::selectAll();

            $pagetitle = "Sneaker créée";
            $view = "created";

            require (File::build_path(array("view", "view.php")));
    }

    public static function update() {
            if(Session::is_admin()) {
                    $s = ModelSneaker::select(myGet("idSneaker"));
                    $modifier = "readonly";
                    $target_action = "updated";

                    if(!Conf::getDebug()) {
                            $method = "post";
                    }
                    else {
                            $method = "get";
                    }

                    if(!$s) {
                            $pagetitle = "Erreur";
                            $view = "error";
                    }
                    else {
                            $pagetitle = "Modification d'une sneaker";
                            $view = "update";
                    }

                    require (File::build_path(array("view", "view.php")));
            }
            else {
                    self::read();
            }
    }

    public static function updated() {
            ModelSneaker::update(array("id_sneaker"=>myGet("idSneaker"), "nom_sneaker"=>myGet("nomSneaker"), "prix_sneaker"=>myGet("prixSneaker"), "couleur_sneaker"=>myGet("couleurSneaker"), "pointure_sneaker"=>myGet("pointureSneaker"), "marque_sneaker"=>myGet("marqueSneaker")));
            $tab_s = ModelSneaker::selectAll();

            $pagetitle = "Sneaker modifiée";
            $view = "updated";

            require (File::build_path(array("view", "view.php")));
    }

    public static function delete() {
            if(Session::is_admin()) {
                    $idSneaker = myGet("idSneaker");
                    ModelSneaker::delete($idSneaker);
                    $tab_s = ModelSneaker::selectAll();

                    if(!$idSneaker) {
                            $pagetitle = "Erreur";
                            $view = "error";
                    }
                    else {
                            $pagetitle = "Suppression d'une sneaker";
                            $view = "deleted";
                    }

                    require (File::build_path(array("view", "view.php")));
            }
            else {
                    self::read();
            }
    }

    public function ajouterSneakerPanier($objet,$quantite) {
            if (creationPanier() && !isVerrouille()) {
                    $recherche = array_search($objet,  $_SESSION["panier"]["sneaker"]);
                    if ($recherche !== false) {
                            $_SESSION["panier"]["quantite"][$recherche] += $quantite ;
            
                    }
                    else {
                            array_push( $_SESSION["panier"]["sneaker"],$objet);
                            array_push( $_SESSION["panier"]["quantite"],$quantite);
                    }
            }
        
        else { 
                echo "Un problème est survenu veuillez contacter l'admin du site.";
        }

    }

    public function supprimeSneakerpanier ($objet) {
        if (creationPanier() && !isVerrouille()) {
                    $paniertampon = array();
                    $paniertampon["sneaker"] = array();
                    $paniertampon["quantite"] = array();
                    $paniertampon["cle"] = $_SESSION["panier"]["cle"];

                    for($i = 0; $i < count($_SESSION["panier"]["objet"]); $i++) {
                            if ($_SESSION["panier"]["objet"][$i] !== $objet) {
                                    array_push( $paniertampon["objet"],$_SESSION["panier"]["objet"][$i]);
                                    array_push( $paniertampon["quantite"],$_SESSION["panier"]["quantite"][$i]);
                            }

                    }

                    $_SESSION["panier"] =  $paniertampon;
                    unset($paniertampon);

        }
       
        else {
                echo "Un problème est survenu veuillez contacter l'admin du site.";
        }

   


    }
}
?>
