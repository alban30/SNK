<?php
require_once (File::build_path(array("model", "Model.php")));

class ModelCommande extends Model {
    protected static $object = "commande";
    protected static $primary="id_commande";

    private $id_commande;
    private $login;
    private $date;

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
                    $this->$login = $data("login");
                    $this->$date = $data("date");   
            }
    }

    public static function saveCommander($data) {
            try {
                    $login=$_SESSION["login"];
                    $date=date("Y-m-d H:i:s");
                    $sql = "INSERT INTO snk_commander (id_sneaker,id_commande,quantite) VALUES (:tag_sneaker,:tag_commande,:tag_quantite)";
                    $req_prep = Model::$pdo->prepare($sql);
                    $values=array(
                        'tag_sneaker' => $data["idSneaker"],
                        'tag_commande' => $data["idCommande"],
                        'tag_quantite' => $data["quantite"],
                    );
                    $req_prep->execute($values);
            } catch(PDOException $e) {
                    if (Conf::getDebug()) {
                            echo $e->getMessage(); // affiche un message d'erreur
                    }
                    else {
                            echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
                    }
                    die();
            }
    } 


    public static function getCommandeByLogin($login) {
        try {
            $sql = "SELECT ce.id_commande,login,date,s.id_sneaker,nom_sneaker,prix_sneaker,couleur_sneaker,pointure_sneaker,marque_sneaker FROM snk_sneaker s JOIN snk_commander cr ON s.id_sneaker=cr.id_sneaker JOIN snk_commande ce ON cr.id_commande=ce.id_commande WHERE login=:tag_login";
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
                "tag_login" => $login,
            );   
            $req_prep->execute($values);
            $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelCommande');
            $tab_c = $req_prep->fetchAll();
            if (empty($tab_c))
                return false;
            return $tab_c;
        }
        catch (PDOException $e) {
          if (Conf::getDebug()) {
            echo $e->getMessage();
          }
          else {
            echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
          }
          die();
        }
    }

}
?>
