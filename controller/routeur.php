<?php
require_once (File::build_path(array("controller", "ControllerAccueil.php")));
require_once (File::build_path(array("controller", "ControllerSneaker.php")));
require_once (File::build_path(array("controller", "ControllerAccessoire.php")));

if(isset($_COOKIE["Preference"])) {
	$controler_default = $_COOKIE["Preference"];
}
else {
	$controler_default = "accueil";
}

if(isset($_GET['controller'])) {
	$controller = $_GET['controller'];
}
else {
	$controller = $controler_default;
}

$controller_class = "Controller" . ucfirst($controller);

if(class_exists($controller_class)) {
	if(isset($_GET['action'])) {
    	$action = $_GET['action'];
	}
	else {
	    $action = "readAll";
	}

	if(in_array($action, get_class_methods($controller_class))) {
	    $controller_class::$action();
	}
	else {
	    $controller_class::error();
	}
}
else {
	$controller_class::error();
}
?>
