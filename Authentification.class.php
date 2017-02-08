<?php
class Authentification {
  private static $instance;


  private function __construct(){}

  public static function getInstance() {
      if (self::$instance == null)
          self::$instance = new Authentification();
      return self::$instance;
  }

  public function isAuth(){
	return Session::getInstance()->exist_id();
	}

  public function checkUser($user_login, $mdp){
	$user=ConnexionMediaBase::getInstance()->get_user($user_login);
	if ($user != null)
		{
		// Reste à ajouter le grin de sel
		//$mdp=md5($mdp);
		$mdpbdd=$user->mdp;
		if ($mdpbdd==$mdp)
		{
			Session::getInstance()->save_user_id($user->id);
			header('Location: ./index.php');

		}
		else
			return false;
		}
	else return false;
	}

  public function disconnect(){
	Session::getInstance()->stop();
	}

}