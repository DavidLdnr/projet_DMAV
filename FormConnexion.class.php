<?php 
class FormConnexion {
	function __toString(){
	return ("<form action='index.php?page=connexion' method='post'><label name='pseudo'>Pseudo</label><input type='text' name='pseudo' value='' autofocus required><br><label name='mdp'>Mot de passe</label><input type='text' name='mdp' value='' required><input type='submit' value='Valider'></form>");
	
	}
	function check($user_login, $mdp)
	{
	$auth=Authentification::getInstance()->checkUser($user_login,$mdp);
	if ($auth != null)
	echo $user->id;
	}
	 
	
	
	}