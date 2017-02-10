<?php
class Authentification {
  private static $instance;

//constructeur de la classe
  private function __construct(){}

  //accesseur de l'instance
  public static function getInstance() {
      if (self::$instance == null)
          self::$instance = new Authentification();
      return self::$instance;
  }
 //fonction qui appelle la fonction exist_id() pour verifier si on est authentifié ou non
  public function isAuth(){
	return Session::getInstance()->exist_id();
	}

	//on verifie les utilisateurs
  public function checkUser($user_login, $mdp)
  {
      $user=ConnexionMediaBase::getInstance()->get_user($user_login);
      if ($user != null)
      {
          // Reste à ajouter le grain de sel
          //$mdp=md5($mdp);
          $mdpbdd=$user->mdp;
          if ($mdpbdd==$mdp)
          {
              Session::getInstance()->save($user);
              return true;
          }
          else
          {
              return false;
          }
      }
      else
      {
          return false;
      }
  }

	// on déconnecte l'utilisateur en utilisant la fonction stop()
  public function disconnect(){
	Session::getInstance()->stop();
	}

}