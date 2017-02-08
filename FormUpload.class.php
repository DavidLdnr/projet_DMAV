<?php 
class FormUpload {
function __toString(){
	       return ("<form action='index.php?page=upload' method='post'><label name='titre'>Titre</label><input type='text' name='titre' value='' autofocus required><br><label name='description'>Description</label><input type='text' name='description' value='' required><input type='file' name='file' required></br> choisissez le type de fichier que vous voulez upload</br><input type='radio' name='type' value='1'> videos<input type='radio' name='type' value='2'> audio<input type='radio' name='type' value='3'> images</br><input type='submit' value='Valider'></form>");
	}

	
	}