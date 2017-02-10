<?php
//appelle du formulaire d'upload si le formulaire n'est pas déjà rempli sinon envoie des données vers la fonction insert_data
		$obj = new FormUpload;
        echo $obj;
        $obj->traitement();
?>