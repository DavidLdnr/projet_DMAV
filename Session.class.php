<?php
class Session {
  private static $instance = null;
  private $nom;


  private function __construct($nom) {
    $this->nom = $nom;
  }

  public static function getInstance($nom='user_id') {
    if (self::$instance == null)
        self::$instance = new Session($nom);
    return self::$instance;
  }

  public function start() {
    //session_name($this->nom);
    session_start();
  }

  public function save($user){
	$_SESSION['user_id']= $user->id;
    $_SESSION['user_name']=$user->pseudo;
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