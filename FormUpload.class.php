<?php 
class FormUpload {
function __toString(){
	       return ("<form action='index.php?page=upload' method='post'><label name='titre'>Titre</label><input type='text' name='titre' value='' autofocus required><br><label name='description'>Description</label><input type='text' name='description' value='' required><input type='file' name='file' required><input type='submit' value='Valider'></form>");
	}

	
	}