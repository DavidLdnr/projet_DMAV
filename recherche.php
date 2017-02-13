<?php
require_once('autoload.php');
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
            echo "<span class='result'>Résultats de votre recherche</span>";
            foreach($recherche as $req)
            {
                if ($req->type==1)
                {
                    echo "<div id='video' class='type'><p>Description :<strong> $req->description</strong></p><video src='$req->chemin' controls></video><p>Postée le $req->date</div>";
                }
                else if ($req->type==2)
                {
                    echo "<div id='son' class='type'><p>Description :<strong> $req->description</strong></p><audio src='$req->chemin' controls></audio><p>Posté le $req->date</div>";
                }
                    else 
                    echo "<div id='image' class='type'><p>Description :<strong> $req->description</strong></p><img src='$req->chemin'><p>Postée le $req->date</div>";
              
            }
        }
        catch (Exception $exception)
        {
            echo "<span class='error'>".$exception->getMessage()."</span>";
        }
        
    }
    else
        echo $obj;