<?php
	$obj = new FormRecherche;
	if (!isset($_POST['auteur']) || !isset($_POST['description']))
    {
        echo $obj;
    }
	else if ($_POST['auteur']!="" || $_POST['description']!= "" ||
        isset($_POST['audio']) || isset($_POST['video']) || isset($_POST['image']))
    {
        $types =[];
        if(isset($_POST['video']))
        {
            $types[] = 1;
        }

        if(isset($_POST['audio']))
        {
            $types[] = 2;
        }

        if(isset($_POST['image']))
        {
            $types[] = 3;
        }

        try
        {
        	$recherche=ConnexionMediaBase::getInstance()->recherche($_POST['auteur'], $_POST['description'], $types);
        }
        catch (Exception $exception)
        {
            echo $exception->getMessage();
        }
        
    }
    else
        echo $obj;
				