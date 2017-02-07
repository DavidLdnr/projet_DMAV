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
	ConnexionMediaBase::getInstance();
	
	
}