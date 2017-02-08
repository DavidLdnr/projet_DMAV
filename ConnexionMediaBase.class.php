<?php

class ConnexionMediaBase {
private static $instance;
private $host = 'localhost';
private $user = 'root';
private $pass = '';
private $db   = 'mediabase';
private $dbh;

private function __construct() {
 $this->dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->db, $this->user, $this->pass);
}


  public static function getInstance() {
    if (!self::$instance) self::$instance = new self();
    return self::$instance;
  }

  public function get_user($pseudo){
  	$req = "SELECT * FROM users where pseudo='$pseudo'";
	try
    {
 	    $result=$this->dbh->query($req);
        $obj=$result->fetchObject();
        return new User($obj->id,$obj->pseudo,$obj->mdp);
     }
     catch (PDOException $exception)
     {
        return null;
     }
  }
    
  public function inset_data($titre,$description,$file) {
      $req="INSERT INTO DATAS"
  }
    
}