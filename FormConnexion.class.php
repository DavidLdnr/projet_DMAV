<?php 
class FormConnexion {
	function __toString(){
	return ("<form action='index.php?page=connexion' method='post'><label name='pseudo'>Pseudo</label><input type='text' name='pseudo' value='pseudo'  autofocus required><br><label name='mdp'>Mot de passe</label><input type='text' name='mdp' value='mdp' required><input type='submit' value='Valider'></form>");
	
	}
	
	
	
	
	}