<?php
require_once (File::build_path(array("controller", "ControllerVoiture.php")));
require_once (File::build_path(array("controller", "ControllerUtilisateur.php")));
require_once (File::build_path(array("controller", "ControllerTrajet.php")));

function myGet($nomVar) {
		if(isset($_GET[$nomVar])) {
				return $_GET[$nomVar];
		}
		elseif(isset($_POST[$nomVar])) {
				return $_POST[$nomVar];
		}
		else {
				return false;
		}

}
if(isset($_COOKIE["Preference"])) {
		$controler_default = $_COOKIE["Preference"];
}
else {
		$controler_default = "voiture";
}

if(myGet("controller") != false) {
		$controller = myGet("controller");
}
else {
		$controller = $controler_default;
}

$controller_class = "Controller" . ucfirst($controller);

if(class_exists($controller_class)) {
		if(myGet("action") != false) {
	  		$action = myGet("action");
		}
		else {
		    $action = "readAll";
		}

		if(in_array($action, get_class_methods($controller_class))) {
		    $controller_class::$action();
		}
		else {
		    $pagetitle = "Erreur";
		    $controller = $controler_default;
		    $view = "error";

		    require (File::build_path(array("view", "view.php")));
		}
}
else {
		$pagetitle = "Erreur";
		$controller = $controler_default;
		$view = "error";

		require (File::build_path(array("view", "view.php")));
}
?>
