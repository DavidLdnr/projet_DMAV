<?php
	$obj = new FormRecherche;
	if (!isset($_POST['auteur']) || !isset($_POST['description']))
    {
        echo $obj;
    }
	else if ($_POST['auteur']!="" || $_POST['description']!= "" ||
        isset($_POST['audio']) || !isset($_POST['video'] || !isset($_POST['image']))
    {
        $types = array();
        if(isset[isset($_POST['video']]))
        {
            array_push(1);
        }

        if(isset[isset($_POST['audio']]))
        {
            array_push(2);
        }

        if(isset[isset($_POST['image']]))
        {
            array_push(3);
        }

        $recherche=ConnexionMediaBase::getInstance()->recherche($_POST['auteur'], $_POST['description'], $types);
    }
    else
        echo $obj;
				