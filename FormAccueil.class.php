<?php 
class FormAccueil {
	//création via la fonction magique __toString() de la page d'accueil
function __toString(){
	       return ("
    <div id='video' class='type'>
    <strong>Vidéo</strong>
    <video src='multimedia/videos/RAKOTON.webm' controls></video>
    <span id='auteur_video'>nom de l'auteur</span>
    <span id='titre_video'>titre de la vidéo</span>
    <span id='date_video'>date</span>
</div>
<div id='image'class='type'>
    <strong>Image</strong>
    <img src='multimedia/images/collieretbraceletdiag.jpg'>
    <span id='auteur_image'>nom de l'auteur</span>
    <span id='titre_image'>titre de l'image</span>
    <span id='date_image'>date</span>
</div>
<div id='son' class='type'>
    <strong>Audio</strong>
    <audio src='multimedia/audio/Black black.ogg' controls></audio>
    <span id='auteur_son'>nom de l'auteur</span>
    <span id='titre_son'>titre du son</span>
    <span id='date_son'>date</span>
</div>");
	}
	}