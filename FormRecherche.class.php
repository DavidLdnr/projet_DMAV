<?php 
class FormRecherche {
function __toString(){
	       return ("<form action='index.php?page=recherche' method='post'><label name='auteur'>Auteur</label><input type='text' name='auteur' value='' autofocus><br>Vidéo<input type='checkbox' name='type' value='1'>Image<input type='checkbox' name='type' value='2'>Audio<input type='checkbox' name='type' value='3'><br><label name='description'>Description</label><input type='text' name='description' value=''><input type='submit' value='Valider'></form>");
	}
	}