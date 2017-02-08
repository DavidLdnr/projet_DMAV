<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<title>index</title>
	</head>
	<body>
		<header>
		<div id='btnconnexion'>
		<?php
		require_once('autoload.php');
		if (Authentification::getInstance()->isAuth()==false)
		{ ?>
			<a href="index.php?page=connexion"><input type="button" name="connexion "value="connexion"/></a>
		<?php }
		else { ?>
		<a href="index.php?page=upload"><input type="button" name="upload "value="upload"/></a>	
		<a href="index.php?page=deconnexion"><input type="button" name="déconnexion "value="déconnexion"/></a>	
		<?php } ?>
		</div>
		<div id='btnconnexion'>
		logo/nom du site
		</div>
		</header>
		<?php
        if(!empty($_GET['page']))
        {
	        $page = $_GET['page'];
        } else
        {
            $page = 'accueil';
        }
		
		include($page.'.php'); ?>
		
		<footer>
			<p>© Copyright 2017 - Marie - Antoine - David - Vincent</p>
		</footer>
	</body>
</html>