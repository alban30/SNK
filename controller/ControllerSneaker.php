<?php
require_once (File::build_path(array("model", "ModelSneaker.php"))); // chargement du modèle

class ControllerSneaker {
    protected static $object = "sneaker";

    public static function readAll() {
            $tab_s = ModelSneaker::selectAll();     //appel au modèle pour gerer la BD

            $pagetitle = "Liste des sneakers";
            $view = "list";

            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function read() {
            $s = ModelSneaker::select(myGet("idSneaker"));   //appel au modèle pour gerer la BD

            if(!$s) {
                $pagetitle = "Erreur";
                $view = "error";
            }
            else {
                $pagetitle = "Affichage d'une sneaker";
                $view = "detail";
            }
            
            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function create() {
            $s = new ModelSneaker();
            $modifier = "required";
            $target_action = "created";

            if(!$s) {
                $pagetitle = "Erreur";
                $view = "error";
            }
            else {
                $pagetitle = "Création d'une sneaker";
                $view = "update";
            }

            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function created() {
            ModelSneaker::save(array("id_sneaker"=>myGet("idSneaker"), "nom_sneaker"=>myGet("nomSneaker"), "prix_sneaker"=>myGet("prixSneaker"), "couleur_sneaker"=>myGet("couleurSneaker"), "pointure_sneaker"=>myGet("pointureSneaker"), "nom_marque"=>myGet("nomMarque")));
            $tab_s = ModelSneaker::selectAll();

            $pagetitle = "Sneaker créée";
            $view = "created";

            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function update() {
            $s = ModelSneaker::select(myGet("idSneaker"));
            $modifier = "readonly";
            $target_action = "updated";

            if(!$s) {
                $pagetitle = "Erreur";
                $view = "error";
            }
            else {
                $pagetitle = "Modification d'une sneaker";
                $view = "update";
            }

            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vues
    }

    public static function updated() {
            ModelSneaker::update(array("id_sneaker"=>myGet("idSneaker"), "nom_sneaker"=>myGet("nomSneaker"), "prix_sneaker"=>myGet("prixSneaker"), "couleur_sneaker"=>myGet("couleurSneaker"), "pointure_sneaker"=>myGet("pointureSneaker"), "nom_marque"=>myGet("nomMarque")));
            $tab_s = ModelSneaker::selectAll();

            $pagetitle = "Sneaker modifiée";
            $view = "updated";

            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function delete() {
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
            
            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vues
    }
}
?>
