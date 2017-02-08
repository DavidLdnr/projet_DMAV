<?php
		$obj = new FormConnexion;
		if (!isset($_POST['pseudo']) and !isset($_POST['mdp']))
		{
		echo $obj;
		}
		else
		$obj->check($_POST['pseudo'],$_POST['mdp']);
		
		
		
		?>