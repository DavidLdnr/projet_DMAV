<?php
//appelle de la page qui génère la page d'accueil
		//$obj = new FormAccueil;
		//echo $obj;	
		

 try
        {
        	$accueil=ConnexionMediaBase::getInstance()->accueil();
            echo "<span class='result'>Derniers ajouts</span>";
            foreach($accueil as $req)
            {
                if ($req->type==1)
                {
                    echo "<div id='video' class='type'><p>Description :<strong> $req->description</strong></p><video src='$req->chemin' controls></video><p>Postée le $req->date</p></div>";
                }
                else if ($req->type==2)
                {
                    echo "<div id='son' class='type'><p>Description :<strong> $req->description</strong></p><audio src='$req->chemin' controls></audio><p>Posté le $req->date</p></div>";
                }
                    else 
                    echo "<div id='image' class='type'><p>Description :<strong> $req->description</strong></p><img src='$req->chemin'><p>Postée le $req->date</p></div>";
              
            }
        }
        catch (Exception $exception)
        {
            echo $exception->getMessage();
        }