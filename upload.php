<?php
require_once('autoload.php');
if(!Authentification::getInstance()->isAuth())
{
    header('Location:index.php');
}

//appel du formulaire d'upload si le formulaire n'est pas déjà rempli sinon envoi des données vers la fonction insert_data
$obj = new FormUpload;
echo $obj;
$obj->traitement();
?>