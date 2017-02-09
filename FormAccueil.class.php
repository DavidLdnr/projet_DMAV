<?php 
class FormAccueil {
function __toString(){
	       return ("<div id='video'>
    <strong>Vidéo</strong>
    <video src='' controls width='600'></video>
    <span id='auteur_video'>nom de l'auteur</span>
    <span id='titre_video'>titre de la vidéo</span>
    <span id='date_video'>date</span>
</div>
<div id='image'>
    <strong>Image</strong>
    <img src=''>
    <span id='auteur_image'>nom de l'auteur</span>
    <span id='titre_image'>titre de l'image</span>
    <span id='date_image'>date</span>
</div>
<div id='son'>
    <strong>Audio</strong>
    <audio src='' controls></audio>
    <span id='auteur_son'>nom de l'auteur</span>
    <span id='titre_son'>titre du son</span>
    <span id='date_son'>date</span>
</div>");
	}
	}