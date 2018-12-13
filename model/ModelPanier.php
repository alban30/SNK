<?php 
 
require_once (File::build_path(array("model", "Model.php")));
require_once (File::build_path(array("model", "ModelSneaker.php")));

class ModelPanier extends Model{
	
	protected static $object = "panier";

	private $id_sneaker;


	public function __construct($data = array()) {
            if (!empty($data)) {
                    $this->$id_sneaker = $data("id_sneaker");
              
            }
    }

    public function get($nom_attribut) {
            if (property_exists($this, $nom_attribut))
                    return $this->$nom_attribut;
            return false;
    }


    public static function getPanier($tabsneaker) {
    	        if (is_array($tabsneaker)){
        			$tab = array();
        			foreach ($tab as $id){
         					  $sql = "SELECT * FROM snk_sneaker WHERE id_sneaker=:id";
          					$req_prep = Model::$pdo->prepare($sql);
          					$values = array("id" => $id,);
          					$req_prep->execute($values);
          					
          					$req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelProduit');
          					$tab_p = $req_prep->fetchAll();
          					array_push ($tab, $tab_p[0]);
        		}
        		return $tabsneaker;
      			}
      
      			else {
        				$sql = "SELECT * FROM snk_sneaker WHERE id_sneaker=:id";
        				$req_prep = Model::$pdo->prepare($sql);
        				$values = array("id" => $tabsneaker,);
        				$req_prep->execute($values);
        				$req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelProduit');
        				$tab_p = $req_prep->fetchAll();
       					return $tab_p;
      			}
    }

}
?>