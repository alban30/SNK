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
    private $id_marque;

    public function getIdSneaker() {
        return $this->id_sneaker;
    }

    public function setIdSneaker($idSneaker) {
        $this->id_sneaker = $idSneaker;
    }

    public function getNomSneaker() {
        return $this->nom_sneaker;
    }

    public function setNomSneaker($nomSneaker) {
        $this->nom_sneaker = $nomSneaker;
    }

    public function getPrixSneaker() {
        return $this->prix_sneaker;
    }

    public function setPrixSneaker($prixSneaker) {
        $this->prix_sneaker = $prixSneaker;
    }

    public function getCouleurSneaker() {
        return $this->couleur_sneaker;
    }

    public function setCouleurSneaker($couleurSneaker) {
        $this->couleur_sneaker = $couleurSneaker;
    }

    public function getPointureSneaker() {
        return $this->pointure_sneaker;
    }

    public function setPointureSneaker($pointureSneaker) {
        $this->pointure_sneaker = $pointureSneaker;
    }

    public function getIdMarque() {
        return $this->id_sneaker;
    }

    public function setIdMarque($idMarque) {
        $this->id_marque = $idMarque;
    }

    public function __construct($data = array()) {
        if (!empty($data)) {
            $this->id_sneaker = $data("idSneaker");
            $this->nom_sneaker = $data("nomSneaker");
            $this->prix_sneaker = $data("prixSneaker");
            $this->couleur_sneaker = $data("couleurSneaker");
            $this->pointure_sneaker = $data("pointureSneaker");
            $this->id_marque = $data("idMarque");
        }
    }

}
?>
