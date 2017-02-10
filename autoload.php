<?php
// Fonction destinée au chargement automatique des classes
function __autoload($objname) {
  require($objname.'.class.php');
}
