<?php
require_once (File::build_path(array("model", "Model.php")));

class ModelSneaker extends Model {
    protected static $name = "sneaker";
    protected static $phpmy = "snk_sneaker";
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

    public function getNomMarque($idSneaker) {
        try {
            $sql = "SELECT nom_marque from snk_marque WHERE id_sneaker=:tag_idMarque";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);

            $values = array(
                "tag_idMarque" => $_GET["idSneaker"],
                //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête     
            $req_prep->execute($values);

            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelSneaker');
            $tab_nom = $req_prep->fetchAll();
            // Attention, si il n'y a pas de résultats, on renvoie false
            if (empty($tab_nom))
                return false;
            return $tab_voit[0];
        }
        catch (PDOException $e) {
            if (Conf::getDebug()) {
              echo $e->getMessage(); // affiche un message d'erreur
            }
            else {
              echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
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
