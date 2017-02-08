<?php
		$obj = new FormUpload;
		if (!isset($_POST['titre']) and !isset($_POST['description']) and !isset($_POST['file']))
		{
		echo $obj;
		}
		else
		$envoie=ConnexionMediaBase::getInstance()->insert_data($_POST['titre'],$_POST['description'],$_POST['file']);
		
				
		?>