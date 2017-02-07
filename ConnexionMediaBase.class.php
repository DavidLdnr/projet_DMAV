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
  	$req = "SELECT * FROM users where pseudo=$pseudo";
	$result=$this->dbh->query($req);
	if ($result->rowcount==1)
		{
		$obj=$result->fetchObject();
		return new User($obj->id,$obj->pseudo,$obj->mdp);
		}
	else return null;
  }
}