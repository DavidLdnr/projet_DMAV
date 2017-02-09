<?php
class Session {
  private static $instance = null;
  private $nom;

//constructeur de la classe Session
  private function __construct($nom) {
    $this->nom = $nom;
  }
 // accesseur de l'instance
  public static function getInstance($nom='user_id') {
    if (self::$instance == null)
        self::$instance = new Session($nom);
    return self::$instance;
  }

  //démmarage de la session
  public function start() {
    //session_name($this->nom);
    session_start();
  } 
  //sauvegarde de l'utilisateur dans la variable de session
  public function save($user){
	$_SESSION['user_id']= $user->id;
    $_SESSION['user_name']=$user->pseudo;
  }
 //verification si l'utilisateur est connecté ou non
  public function exist_id(){
	if (isset($_SESSION['user_id']))
		return true;
	else
		return false;
	}
//on ferme la session 
  public function stop() {
    if (isset($_SESSION['user_id'])) {
      session_destroy();
    } else {
      die("la session ne peut être détruite car elle n'est pas active !");
    }
  }

}