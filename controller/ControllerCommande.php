<?php
require_once (File::build_path(array("model", "ModelCommande.php"))); // chargement du modèle

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
                    $links = "";

                    if(Session::is_Admin()) {
                            $links = '<a style="margin-right: 1%" href="index.php?controller=commande&action=delete&idCommande=' . rawurlencode($c->get("id_commande")) . '">Supprimer cette commande</a><a style="margin-right: 1%" href="index.php?controller=commande&action=update&idCommande=' . rawurlencode($c->get("id_commande")) . '">Modifier cette commande</a>';
                    }
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
            ModelCommande::save(array("id_commande"=>myGet("idCommande"), "nom_sneaker"=>myGet("nomSneaker"), "marque_sneaker"=>myGet("marqueSneaker"), "prix_sneaker"=>myGet("prixSneaker"), "couleur_sneaker"=>myGet("couleurSneaker"), "pointure_sneaker"=>myGet("pointureSneaker"), "login"=>myGet("login"), "nom"=>myGet("nom"), "prenom"=>myGet("prenom")));
            $tab_c = ModelCommande::selectAll();

            $pagetitle = "Commande créée";
            $view = "created";

            require (File::build_path(array("view", "view.php")));
    }

    public static function update() {
            if(Session::is_admin()) {
                    $c = ModelCommande::select(myGet("idCommande"));
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
                            $pagetitle = "Modification d'une commande";
                            $view = "update";
                    }

                    require (File::build_path(array("view", "view.php")));
            }
            else {
                    self::read();
            }
    }

    public static function updated() {
            ModelCommande::update(array("id_commande"=>myGet("idCommande"), "nom_sneaker"=>myGet("nomSneaker"), "marque_sneaker"=>myGet("marqueSneaker"), "prix_sneaker"=>myGet("prixSneaker"), "couleur_sneaker"=>myGet("couleurSneaker"), "pointure_sneaker"=>myGet("pointureSneaker"), "login"=>myGet("login"), "nom"=>myGet("nom"), "prenom"=>myGet("prenom")));
            $tab_c = ModelCommande::selectAll();

            $pagetitle = "Commande modifiée";
            $view = "updated";

            require (File::build_path(array("view", "view.php")));
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
}
?>
