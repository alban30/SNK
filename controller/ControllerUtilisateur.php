<?php
require_once (File::build_path(array("model", "ModelUtilisateur.php")));
require_once (File::build_path(array("lib", "Security.php")));

class ControllerUtilisateur {
	protected static $object = "utilisateur";

	public static function readAll() {
			if(Session::is_admin()) {
					$tab_u = ModelUtilisateur::selectAll();
					$pagetitle = "Liste d'utilisateurs";
					$view = "list";

					require (File::build_path(array("view", "view.php")));
			}
			else {
				header("Location: index.php");
			}
	}

	public static function read() {
			$u = ModelUtilisateur::select(myGet("login"));
			$links = '<a style="margin-right: 1%" href="index.php?controller=utilisateur&action=update&login=' . rawurlencode($u->get("login")) . '">Modifier cet utilisateur</a>';

			if(!$u) {
					$pagetitle = "Erreur";
					$view = "error";
					require (File::build_path(array("view", "view.php")));
			}
			else {
					$pagetitle = "Affichage d'un utilisateur";
					$view = "detail";
			}

			require (File::build_path(array("view", "view.php")));
	}

	public static function create() {
			$u = new ModelUtilisateur();
			$modifier = "required";
			$target_action = "created";

			if(!Conf::getDebug()) {
					$method = "post";
			}
			else {
					$method = "get";
			}

			if(!$u) {
					$pagetitle = "Erreur";
					$view = "error";
			}
			else {
					$pagetitle = "Création d'un utilisateur";
					$view = "update";
			}

			require (File::build_path(array("view", "view.php")));
	}

	public static function created() {
			if(Session::is_admin()) {
				if(myGet("mdp") == myGet("mdpc") && filter_var(myGet("email"), FILTER_VALIDATE_EMAIL)) {
						$nonce = Security::generateRandomHex();
						ModelUtilisateur::save(array("login" => ucfirst(myGet("login")), "nom" => ucfirst(myGet("nom")), "prenom" => ucfirst(myGet("prenom")), "email" => myGet("email"), "mdp" => Security::chiffrer(myGet("mdp")), "nonce" => $nonce));

						$mail = '<p>Vous venez de vous inscrire sur <strong>SNK - World Famous</strong>, pour confirmer votre inscription veuillez cliquer <a href="http://webinfo.iutmontp.univ-montp2.fr/~pereiraa/SNK/index.php?controller=utilisateur&action=validate&login=' . rawurlencode(myGet("login")) . '&nonce=' . rawurlencode($nonce) . '">ici</a>.<br/>SNK vous remercie pour votre inscription ! <em>Le meilleur de la sneaker est ici !</em></p>';
						mail(myGet("email"), "Inscription - SNK", $mail);

						$pagetitle = "Utilisateur créé";
						$view = "created";
				}
				else {
						$pagetitle = "Erreur";
						$view = "error";
				}
				$tab_u = ModelUtilisateur::selectAll();

				require (File::build_path(array("view", "view.php")));
			}
			else {
	                    self::readAll();
	        }
	}

	public static function update() {
			if(Session::is_user(myGet("login")) || Session::is_admin()) {
					$u = ModelUtilisateur::select(myGet("login"));
					$modifier = "readonly";
					$target_action = "updated";

					if(!Conf::getDebug()) {
							$method = "post";
					}
					else {
							$method = "get";
					}

					if(!$u) {
							$pagetitle = "Erreur";
							$view = "error";
					}
					else {
							$pagetitle = "Modification d'un utilisateur";
							$view = "update";
					}
			}
			else {
					$pagetitle = "Erreur";
					$view = "error";
			}

			require (File::build_path(array("view", "view.php")));
	}

	public static function updated() {
		if(Session::is_user(myGet("login")) || Session::is_admin()) {
			if(myGet("mdp") == myGet("mdpc")) {
					if(Session::is_admin()) {
							if(myGet("admin") != false && $_SESSION["admin"] == "1") {
									$admin = 1;
							}
							else {
									$admin = 0;
							}
							$update = array("login" => ucfirst(myGet("login")), "nom" => ucfirst(myGet("nom")), "prenom" => ucfirst(myGet("prenom")), "email" => myGet("email"), "mdp"=>Security::chiffrer(myGet("mdp")), "admin"=>$admin);
					}
					else {
							$update = array("login" => ucfirst(myGet("login")), "nom" => ucfirst(myGet("nom")), "prenom" => ucfirst(myGet("prenom")), "email" => myGet("email"), "mdp"=>Security::chiffrer(myGet("mdp")));
					}

					ModelUtilisateur::update($update);
					$pagetitle = "Utilisateur modifié";
					$view = "updated";
			}
			else {
					$pagetitle = "Erreur";
					$view = "error";
			}
			$u = ModelUtilisateur::select(myGet("login"));

			require (File::build_path(array("view", "view.php")));
		}
	}

	public static function delete() {
			if(Session::is_admin()) {
					$login = myGet("login");
					ModelUtilisateur::delete($login);
					$tab_u = ModelUtilisateur::selectAll();

					if(!$login) {
							$pagetitle = "Erreur";
							$view = "error";
					}
					else {
							$pagetitle = "Suppression d'un utilisateur";
							$view = "deleted";
					}

					if($login == $_SESSION["login"]) {
						self::deconnect();
					}

					require (File::build_path(array("view", "view.php")));
			}
			else {
					header("Location: index.php");
			}
	}

	public static function connect() {
		if(isset($_SESSION["login"])) {

			header("Location: index.php");
		
		}

		else {
			$pagetitle = "Connexion";
			$view = "connect";
			$target_action = "connected";

			require (File::build_path(array("view", "view.php")));
		}
	}

	public static function connected() {
			$user = ModelUtilisateur::select(myGet("login"));
			$bool = ModelUtilisateur::checkPassword(myGet("login"), Security::chiffrer(myGet("mdp")));

			if($user && $user->get("nonce") == NULL) {
					if($bool) {
							$_SESSION["login"] = ucfirst(myGet("login"));
					}
					if(isset($_SESSION["login"]) && $user->get("admin") == 1) {
							$_SESSION["admin"] = true;
					}
					header("Location: index.php");
			}
			else {
					self::connect();
			}
	}

	public static function deconnect() {
			session_unset();
			session_destroy();
			setcookie(session_name(), "", time() - 1);

			self::connect();
	}

	public static function validate() {
			$user = ModelUtilisateur::select(myGet("login"));
			if(myGet("nonce") == $user->get("nonce")) {
					ModelUtilisateur::update(array("login" => $user->get("login"), "nom" => $user->get("nom"), "prenom" => $user->get("prenom"), "mdp" => $user->get("mdp"), "email" => $user->get("email"), "nonce" => NULL));
					self::connect();
			}
			else {
					header("Location: index.php");
			}
	}
}
?>
