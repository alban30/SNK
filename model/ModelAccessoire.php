<?php
require_once (File::build_path(array("model", "Model.php")));

class ModelAccessoire extends Model {
    protected static $name = "accessoire";
    protected static $phpmy = "snk_accessoire";
    protected static $primary="id_accessoire";

    private $id_accessoire;
    private $nom_accessoire;
    private $prix_accessoire;
    private $id_marque;

    public function getIdAccessoire() {
        return $this->id_accessoire;
    }

    public function setIdAccessoire($idAccessoire) {
        $this->id_accessoire = $idAccessoire;
    }

    public function getNomAccessoire() {
        return $this->nom_accessoire;
    }

    public function setNomAccessoire($nomAccessoire) {
        $this->nom_accessoire = $nomAccessoire;
    }

    public function getPrixAccessoire() {
        return $this->prix_accessoire;
    }

    public function setPrixAccessoire($prixAccessoire) {
        $this->prix_accessoire = $prixAccessoire;
    }

    public function getIdMarque() {
        return $this->id_sneaker;
    }

    public function setIdMarque($idMarque) {
        $this->id_marque = $idMarque;
    }

    public function __construct($data = array()) {
        if (!empty($data)) {
            $this->id_accessoire = $data("idAccessoire");
            $this->nom_accessoire = $data("nomAccessoire");
            $this->prix_accessoire = $data("prixAccessoire");
            $this->id_marque = $data("idMarque");
        }
    }

}
?>
