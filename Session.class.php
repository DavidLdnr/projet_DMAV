<?php 
class Session {
  private static $instance;
  private $nom;   // le nom de la variable de session   

  
  private function __construct($nom) {
    $this->nom = $nom;
  }

  public static function getInstance($nom='DEF_SESSID') {
    if (!self::$instance) self::$instance = new self($nom);
    return self::$instance;
  }
  
  public function start() {
    session_name($this->nom);
    session_start();
    
    } 
 

  public function stop() {
      session_destroy();
  }
  
  // accesseur aux variables de session
  public function get($nom) {
    if (isset($_SESSION[$nom])) {
      return $_SESSION[$nom];
    } else {
      // dans le cas où la variable n'existe pas on retourne NULL pour éviter un "warning"
      return NULL;
    }
  }

  // mutateur des variables de session 
  public function set($nom, $val) {
    $_SESSION[$nom] = $val;
  }

}