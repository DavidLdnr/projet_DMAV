<?php
require_once('autoload.php');
$obj = new FormAdduser;

if ($obj->check())
    $obj->traitement();

else echo $obj;
?>