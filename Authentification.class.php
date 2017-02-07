<?php 
class Authentification {
  private static $instance;

  public static function getInstance() {
    if (!self::$instance) self::$instance = new self();
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
		$mdp=md5($mdp);
		$mdpbdd=$user->mdp;
		if ($mdpbdd==$mdp)
		{
		Session::getInstance()->start();
		Session::getInstance()->save_user_id($user_login);	
		}
		else 
			return false;
		}
	}
	
  public function disconnect(){
	Session::getInstance()->stop();
	}
	
}