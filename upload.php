<?php
//appelle du formulaire d'upload si le formulaire n'est pas déjà rempli sinon envoie des données vers la fonction insert_data
		$obj = new FormUpload;
		if (!isset($_POST['description']) and !isset($_FILES['file']) and !isset($_POST['type']))
		{
            echo $obj;
		}
		else
        {

            $envoie=ConnexionMediaBase::getInstance()->insert_data($_POST['description'],$_FILES['file'], $_POST['type']);
        }


?>