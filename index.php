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
		if (Authentification::getInstance()->isAuth())
		{ ?>
			<a href="lien vers la page de connexion'"><input type="button" name="connexion "value="connexion"/></a>
		<?php }
		else { ?>
		<a href="lien vers le script d'upload'"><input type="button" name="upload "value="upload"/></a>	
		<a href="lien vers le script de déconnexion'"><input type="button" name="déconnexion "value="déconnexion"/></a>	
		<?php } ?>
		</div>
		<div id='btnconnexion'>
		logo/nom du site
		</div>
		</header>
		<div id='video'>
		<strong>Vidéo</strong>
		<video src="lien de la dernière vidéo sur le site" controls  width="600"></video>
		<span id='auteur_video'>nom de l'auteur</span>
		<span id='titre_video'>titre de la vidéo</span>
		<span id='date_video'>date</span>
		</div>
		<div id='image'>
		<strong>image</strong>
		<img src="lien de l'image">
		<span id='auteur_image'>nom de l'auteur</span>
		<span id='titre_image'>titre de l'image</span>
		<span id='date_image'>date</span>
		</div>
		<div id='son'>
		<strong>Son</strong>
		<audio src="lien du son" controls></audio>
		<span id='auteur_son'>nom de l'auteur</span>
		<span id='titre_son'>titre du son</span>
		<span id='date_son'>date</span>
		</div>
		<?php
		$obj = new FormConnexion;
		echo $obj;
		?>
		<footer>
			<p>© Copyright 2017 - Marie - Antoine - David - Vincent</p>
		</footer>
	</body>
</html>