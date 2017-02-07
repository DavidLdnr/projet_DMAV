<?php 
class User {
	public $id;
	public $pseudo;
	public $mdp;

	function __construct($id,$pseudo,$mdp) {
	$this->id=$id;
	$this->pseudo=$pseudo;
	$this->mdp=$mdp;
	}


}