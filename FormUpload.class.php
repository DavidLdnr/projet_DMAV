<?php
class FormUpload {
function __toString(){
	       return ("<form action='index.php?page=upload' method='post' enctype='multipart/form-data'>
                        <label name='titre'>Titre</label><input type='text' name='titre' value='' autofocus required><br>
                        <label name='description'>Description</label><input type='text' name='description' value='' required>
                        <input type='file' name='file' required></br> Choisissez le type de fichier que vous voulez upload</br>
                        <input type='radio' name='type' value='1'>Video
                        <input type='radio' name='type' value='2'>Audio
                        <input type='radio' name='type' value='3'>Images</br>
                        <input type='submit' value='Valider'>
                    </form>");
	}


}