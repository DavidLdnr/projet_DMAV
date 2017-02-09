<?php 

class User {
	public $id;
	public $pseudo;
	public $mdp;
//constructeurs de la class User
	function __construct($id,$pseudo,$mdp) {
	$this->id=$id;
	$this->pseudo=$pseudo;
	$this->mdp=$mdp;
	}
}