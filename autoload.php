<?php
// Fonction destin�e au chargement automatique de classes
function __autoload($objname) {
  require($objname.'.class.php');
}
