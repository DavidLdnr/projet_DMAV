<?php
require_once("autoload.php");
//appel de la fermeture de la variable session et redirection vers la page d'index.php
Session::getInstance()->start();
Session::getInstance()->stop();
header('Location: ./index.php?page=accueil');
?>