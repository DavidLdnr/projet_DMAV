<?php
		$obj = new FormUpload;
		if (!isset($_POST['description']) and !isset($_POST['file']) and !isset($_POST['type']))
		{
		echo $obj;
		}
		else
		$envoie=ConnexionMediaBase::getInstance()->insert_data($_POST['description'],$_POST['file'], $_POST['type']);
		
				
		?>