<?php
// Fonction destinée au chargement automatique de classes
function __autoload($objname) {
  require($objname.'.class.php');
}