<?php

class ControllerAccueil {
    protected static $phpmy = "accueil";

    public static function readAll() {
        $pagetitle = "SNK - World Sneakers";
        $view = "accueil";

        require (File::build_path(array("view", "view.php")));
    }
}
?>
