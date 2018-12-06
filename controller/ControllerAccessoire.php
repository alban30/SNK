<?php
require_once (File::build_path(array("model", "ModelAccessoire.php"))); // chargement du modèle

class ControllerAccessoire {
    protected static $object = "accessoire";

    public static function readAll() {
            $tab_a = ModelAccessoire::selectAll();     //appel au modèle pour gerer la BD

            $pagetitle = "Liste des accessoires";
            $view = "list";

            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function read() {
            $a = ModelAccessoire::select(myGet("idAccessoire"));   //appel au modèle pour gerer la BD

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
            $a = new ModelAccessoire();
            $modifier = "required";
            $target_action = "created";

            if(!$a) {
                $pagetitle = "Erreur";
                $view = "error";
            }
            else {
                $pagetitle = "Création d'un accessoire";
                $view = "update";
            }

            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function created() {
            ModelAccessoire::save(array("id_accessoire"=>myGet("idAccessoire"), "nom_accessoire"=>myGet("nomAccessoire"), "prix_accessoire"=>myGet("prixAccessoire"), "marque_accessoire"=>myGet("marqueAccessoire")));
            $tab_a = ModelAccessoire::selectAll();

            $pagetitle = "Accessoire créé";
            $view = "created";

            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function update() {
            $a = ModelAccessoire::select(myGet("idSneaker"));
            $modifier = "readonly";
            $target_action = "updated";

            if(!$a) {
                $pagetitle = "Erreur";
                $view = "error";
            }
            else {
                $pagetitle = "Modification d'un accessoire";
                $view = "update";
            }

            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vues
    }

    public static function updated() {
            ModelAccessoire::update(array("id_accessoire"=>myGet("idAccessoire"), "nom_accessoire"=>myGet("nomAccessoire"), "prix_accessoire"=>myGet("prixAccessoire"), "marque_accessoire"=>myGet("marqueAccessoire")));
            $tab_a = ModelAccessoire::selectAll();

            $pagetitle = "Accessoire modifié";
            $view = "updated";

            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function delete() {
            $idAccessoire = myGet("idAccessoire");
            ModelAccessoire::delete($idAccessoire);
            $tab_a = ModelAccessoire::selectAll();

            if(!$idAccessoire) {
                $pagetitle = "Erreur";
                $view = "error";
            }
            else {
                $pagetitle = "Suppression d'un accessoire";
                $view = "deleted";
            }
            
            require (File::build_path(array("view", "view.php")));  //"redirige" vers la vues
    }
}
?>
