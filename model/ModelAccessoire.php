<?php
require_once (File::build_path(array("model", "Model.php")));

class ModelAccessoire extends Model {
    protected static $object = "accessoire";
    protected static $primary="id_accessoire";

    private $id_accessoire;
    private $nom_accessoire;
    private $prix_accessoire;
    private $marque_accessoire;

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
                    $this->$id_accessoire = $data("id_accessoire");
                    $this->$nom_accessoire = $data("nom_accessoire");
                    $this->$prix_accessoire = $data("prix_accessoire");
                    $this->$marque_accessoire = $data("marque_accessoire");
            }
    }
}
?>
