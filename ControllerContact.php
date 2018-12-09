<?php
class ControllerContact {
    protected static $object = "contact";

    public static function readAll() {
			$pagetitle = "Contact";
			$view = "contact";

			require (File::build_path(array("view", "view.php")));
    }
}
?>
