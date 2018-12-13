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

    // public static function saveCommander($data) {
    //         try {
    //                 $sql = "INSERT INTO snk_commander ("id_sneaker", "quantité") VALUES ($_SESSION["login"],date("Y-m-d H:i:s"))";

    //                 $req_prep = Model::$pdo->prepare($sql);
    //                 $req_prep->execute($data);
    //         } catch(PDOException $e) {
    //                 if (Conf::getDebug()) {
    //                         echo $e->getMessage(); // affiche un message d'erreur
    //                 }
    //                 else {
    //                         echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
    //                 }
    //                 die();
    //         }
    // } 

}
?>
