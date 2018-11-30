<?php
require_once (File::build_path(array("model", "ModelAccessoire.php"))); // chargement du modèle

class ControllerAccessoire {

    protected static $object = "accessoire";

    public static function readAll() {
        $tab_a = ModelSneaker::selectAll();     //appel au modèle pour gerer la BD

        $pagetitle = "Liste des accessoires";
        $view = "list";

        require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function read() {
        $a = ModelSneaker::select($_GET['idAccessoire']);   //appel au modèle pour gerer la BD

        if(!$a) {
            $pagetitle = "Erreur";
            $view = "error";
        }
        else {
            $pagetitle = "Affichage d'un accessoire";
            $view = "detail";
        }
        
        require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function create() {
        $a = new ModelSneaker();
        $modifier = "required";
        $target_action = "created";

        if(!$v) {
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
        ModelSneaker::save(array("id_sneaker"=>$_POST['id'],"nom_sneaker"=>$_POST['nom'],"prix_Sneaker"=>$_POST['prix'],"couleur_sneaker"=>$_POST['couleur'],"pointure_sneaker"=>$_POST['pointure'],"id_marque"=>$_POST['marque']));
        $tab_v = ModelSneaker::selectAll();

        $pagetitle = "Sneaker créée";
        $view = "created";

        require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function update() {
        $v = ModelSneaker::select($_GET['ids']);
        $modifier = "readonly";
        $target_action = "updated";

        if(!$v) {
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
        ModelSneaker::update(array("id_sneaker"=>$_POST['id'],"nom_sneaker"=>$_POST['nom'],"prix_Sneaker"=>$_POST['prix'],"couleur_sneaker"=>$_POST['couleur'],"pointure_sneaker"=>$_POST['pointure'],"id_marque"=>$_POST['marque']));
        $tab_v = ModelSneaker::selectAll();

        $pagetitle = "Sneaker modifiée";
        $view = "updated";

        require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function delete() {
        $ids = $_GET['ids'];
        ModelSneaker::delete($ids);
        $tab_v = ModelSneaker::selectAll();

        if(!$ids) {
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
