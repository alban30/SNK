<?php
class ControllerAccueil {
    protected static $object = "accueil";

    public static function readAll() {
			$pagetitle = "SNK - World Sneakers";
			$view = "accueil";

			require (File::build_path(array("view", "view.php")));
    }
}
?>
