<?php
class Session {
  private static $instance;
  private $nom;

  
  private function __construct($nom) {
    $this->nom = $nom;
  }

  public static function getInstance($nom='user_id') {
    if (!self::$instance) self::$instance = new self($nom);
    return self::$instance;
  }
  
  public function start() {
    session_name($this->nom);
    session_start();   
  }
  
  public function save_user_id($user_id){
	$_SESSION['user_id']=$user_id; 
  }
  
  public function exist_id(){
	if (isset($_SESSION['user_id']))
		return true; 
	else 
		return false;
	}

  public function stop() {
    if (isset($_SESSION['user_id'])) {
      session_destroy();
    } else {
      die("la session ne peut être détruite car elle n'est pas active !");
    }
  }
  
}