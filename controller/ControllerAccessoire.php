<?php
require_once (File::build_path(array("model", "ModelAccessoire.php")));

class ControllerAccessoire {
    protected static $object = "accessoire";

    public static function readAll() {
            $tab_a = ModelAccessoire::selectAll();

            $pagetitle = "Liste des accessoires";
            $view = "list";

            require (File::build_path(array("view", "view.php")));
    }

    public static function read() {
            $a = ModelAccessoire::select(myGet("idAccessoire"));

            if(!$a) {
                    $pagetitle = "Erreur";
                    $view = "error";
            }
            else {
                    $pagetitle = "Affichage d'un accessoire";
                    $view = "detail";
                    $links = "";
            }

            require (File::build_path(array("view", "view.php")));
    }

    public static function create() {
            if(Session::is_admin()) {
                    $a = new ModelAccessoire();
                    $modifier = "required";
                    $target_action = "created";

                    if(!Conf::getDebug()) {
                            $method = "post";
                    }
                    else {
                            $method = "get";
                    }

                    if(!$a) {
                            $pagetitle = "Erreur";
                            $view = "error";
                    }
                    else {
                            $pagetitle = "Modification d'un accessoire";
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
                ModelAccessoire::save(array("id_accessoire"=>myGet("idAccessoire"), "nom_accessoire"=>myGet("nomAccessoire"), "prix_accessoire"=>myGet("prixAccessoire"), "marque_accessoire"=>myGet("marqueAccessoire")));
                $tab_a = ModelAccessoire::selectAll();

                $pagetitle = "Accessoire créé";
                $view = "created";

                require (File::build_path(array("view", "view.php")));
            }
            else {
                    self::readAll();
            }
    }

    public static function update() {
            if(Session::is_admin()) {
                    $a = ModelAccessoire::select(myGet("idAccessoire"));
                    $modifier = "readonly";
                    $target_action = "updated";

                    if(!Conf::getDebug()) {
                            $method = "post";
                    }
                    else {
                            $method = "get";
                    }

                    if(!$a) {
                            $pagetitle = "Erreur";
                            $view = "error";
                    }
                    else {
                            $pagetitle = "Modification d'un accessoire";
                            $view = "update";
                    }

                    require (File::build_path(array("view", "view.php")));
            }
            else {
                    self::read();
            }
    }

    public static function updated() {
            if(Session::is_admin()) {
                ModelAccessoire::update(array("id_accessoire"=>myGet("idAccessoire"), "nom_accessoire"=>myGet("nomAccessoire"), "prix_accessoire"=>myGet("prixAccessoire"), "marque_accessoire"=>myGet("marqueAccessoire")));
                $tab_a = ModelAccessoire::selectAll();

                $pagetitle = "Accessoire modifié";
                $view = "updated";

                require (File::build_path(array("view", "view.php")));
            }
            else {
                    self::read();
            }
    }

    public static function delete() {
            if(Session::is_admin()) {
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

                    require (File::build_path(array("view", "view.php")));
            }
            else {
                    self::read();
            }
    }
}
?>
