<?php
require_once (File::build_path(array("model", "Model.php")));

class ModelCommande extends Model {
    protected static $object = "commande";
    protected static $primary="id_commande";

    private $id_commande;
    private $id_sneaker;
    private $login;

    public function get($nom_attribut) {
            if (property_exists($this, $nom_attribut))
                    return $this->$nom_attribut;
            return false;
    }

    public function set($nom_attribut, $valeur) {
            if (property_exists($this, $nom_attribut))
                    $this->$nom_attribut = $valeur;
            return false;
    }

    public function __construct($data = array()) {
            if (!empty($data)) {
                    $this->$id_commande = $data("id_commande");
                    $this->$id_sneaker = $data("id_sneaker");
                    $this->$login = $data("login");   
            }
    }

}
?>
