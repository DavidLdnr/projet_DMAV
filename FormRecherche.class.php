<?php 
class FormRecherche {
	//création du formulaire de recherche via la fonction magique __toString()
function __toString(){
	       return ("<form action='index.php?page=recherche' method='post'>
                        <label name='auteur'>Auteur</label><input type='text' name='auteur' value='' autofocus><br>
                        Vidéo<input type='checkbox' name='video' value='video'>
                        Image<input type='checkbox' name='image' value='image'>
                        Audio<input type='checkbox' name='audio' value='audio'><br>
                        <label name='description'>Description</label><input type='text' name='description' value=''>
                        <input type='submit' value='Valider'></form>");


	}
	}