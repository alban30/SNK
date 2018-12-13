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
 
}
?>