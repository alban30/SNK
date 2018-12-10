<?php
require_once (File::build_path(array("model", "Model.php")));

class ModelCommande extends Model {
    protected static $object = "commande";
    protected static $primary="id_commande";

    private $id_commande;
    private $nom_sneaker;    
    private $marque_sneaker;
    private $prix_sneaker;
    private $couleur_sneaker;
    private $pointure_sneaker;
    private $login;
    private $nom;
    private $prenom;

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
                    $this->$nom_sneaker = $data("nom_sneaker");
                    $this->$marque_sneaker = $data("marque_sneaker");
                    $this->$prix_sneaker = $data("prix_sneaker");
                    $this->$couleur_sneaker = $data("couleur_sneaker");
                    $this->$pointure_sneaker = $data("pointure_sneaker");
                    $this->$login = $data("login");
                    $this->$nom = $data("nom");
                    $this->$prenom = $data("prenom");        
            }
    }

    public static function validate() {
        
    }
}
?>
