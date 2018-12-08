<?php
require_once (File::build_path(array("model", "Model.php")));

class ModelSneaker extends Model {
    protected static $object = "sneaker";
    protected static $primary="id_sneaker";

    private $id_sneaker;
    private $nom_sneaker;
    private $prix_sneaker;
    private $couleur_sneaker;
    private $pointure_sneaker;
    private $marque_sneaker;

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
                    $this->$id_sneaker = $data("id_sneaker");
                    $this->$nom_sneaker = $data("nom_sneaker");
                    $this->$prix_sneaker = $data("prix_sneaker");
                    $this->$couleur_sneaker = $data("couleur_sneaker");
                    $this->$pointure_sneaker = $data("pointure_sneaker");
                    $this->$marque_sneaker = $data("marque_sneaker");
            }
    }
}
?>
