
<?php

class Perso // Classe Personnage de base.

{
	protected $_nom; 
	protected $_force;
	protected $_exp;

	public function __construct($name, $power, $skill) {
		// echo "New character !";

		$this->_nom = $name;
		$this->_force = $power;
		$this->_exp = $skill;
	}
	
// Getters
	public function getNom(){
		return$this->_nom;
	}

	public function getForce(){
		return$this->_force;
	}

	public function getExp(){
		return$this->_exp;
	}

// Setters

	public function setNom($new_nom){
		$this->_nom = $new_nom;
	}

	public function setForce($new_force){
		$this->_force = $new_force;
	}

	public function setExp($new_exp){
		$this->_exp = $new_exp;
	}


}
