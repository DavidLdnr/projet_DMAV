<?php
		$obj = new FormRecherche;
		if (!isset($_POST['auteur']) || !isset($_POST['description']))
            {
            echo $obj;
            }
		else if ((($_POST['auteur']!="") || ($_POST['description']!="")))
            {
            echo $_POST['auteur'],$_POST['description'];
            //$recherche=ConnexionMediaBase::getInstance()->recherche($_POST['auteur'],$_POST['description'],$_POST['type']);
            }
        else echo $obj;
				
		?>