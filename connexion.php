<?php
//si l'utilisateur est connecté on verifie l'utilisateur sinon on le dirige vers le formulaire de connexion
$obj = new FormConnexion;
if (!isset($_POST['pseudo']) and !isset($_POST['mdp']))
{
	echo $obj;
}
else
{
	$obj->check($_POST['pseudo'],$_POST['mdp']);
}
		
				
?>