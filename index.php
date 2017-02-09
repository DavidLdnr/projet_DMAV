<?php 
require_once('autoload.php'); // Autoload pour chargement des class.php
Session::getInstance()->start(); // Démarrage de la session
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>World of Media Bank</title>
    </head>

    <body>
        <header>
            <div>
                <img src="img/title.png" max-width="100%">
            </div>
        </header>
            <?php
		if (Authentification::getInstance()->isAuth()==false) // Test de la connexion de l'utilisateur, si non connecté :
		{ ?>
                <div class='btn'>
                    <a href="index.php?page=connexion">
                        <input type="button" name="Connexion " value="Connexion" />
                    </a>
                </div>
                <?php }
		else { // Si utilisateur connecté :
        echo "Welcome ".$_SESSION['user_name']." !<br>"; ?>
                    <div class='btn'>
                        <a href="index.php?page=upload">
                            <input type="button" name="upload " value="Upload" />
                        </a>
                    </div>
                    <div class='btn'>
                        <a href="index.php?page=deconnexion">
                            <input type="button" name="déconnexion " value="Déconnexion" />
                        </a>
                        <?php } ?>
                    </div>
                    <div class='btn'>
                        <a href="index.php?page=recherche">
                            <input type="button" name="recherche " value="Recherche" />
                        </a>
                    </div> <?php // Si la page est précisée, on la passe en paramètre, sinon accueil est par défaut
        if(!empty($_GET['page']))
        {
	        $page = $_GET['page'];
        ?>
        <div class='btn'>
            <a href="index.php">
                <input type="button" name="accueil " value="Accueil" />
            </a></div>
            <?php
        } else
        {
            $page = 'accueil';
        }
		
		include($page.'.php'); ?>
       
                <footer>
                    <img src="img/footer.png" max-width="100%">
                </footer>
    </body>

    </html>