<?php
//appelle de la fermeture de la variable session et redirection vers la page d'index.php
Session::getInstance()->stop();
header('Location: ./index.php');
?>