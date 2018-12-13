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
            if(Session::is_admin()) {
                ModelSneaker::save(array("id_sneaker"=>myGet("idSneaker"), "nom_sneaker"=>myGet("nomSneaker"), "prix_sneaker"=>myGet("prixSneaker"), "couleur_sneaker"=>myGet("couleurSneaker"), "pointure_sneaker"=>myGet("pointureSneaker"), "marque_sneaker"=>myGet("marqueSneaker")));
                $tab_s = ModelSneaker::selectAll();

                $pagetitle = "Sneaker créée";
                $view = "created";

                require (File::build_path(array("view", "view.php")));
            }
            else {
                    self::readAll();
            }
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
            if(Session::is_admin()) {
                ModelSneaker::update(array("id_sneaker"=>myGet("idSneaker"), "nom_sneaker"=>myGet("nomSneaker"), "prix_sneaker"=>myGet("prixSneaker"), "couleur_sneaker"=>myGet("couleurSneaker"), "pointure_sneaker"=>myGet("pointureSneaker"), "marque_sneaker"=>myGet("marqueSneaker")));
                $tab_s = ModelSneaker::selectAll();

                $pagetitle = "Sneaker modifiée";
                $view = "updated";

                require (File::build_path(array("view", "view.php")));
            }
            else {
                        self::read();
            }
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

   
}
?>
