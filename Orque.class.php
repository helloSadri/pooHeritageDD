<?php 

//Orque

class Orque extends Perso{

	private $heal;
	private $weapon;

	public function __construct($nom, $force, $exp, $heal, $weapon){
		parent::__construct($nom, $force, $exp);
		$this->heal = $heal;
		$this->weapon = $weapon;
	}
	public function getHeal(){
		return$this->heal;
	}

	public function getWeapon(){
		return$this->weapon;
	}

	public function setHeal($heal){
		$this->heal = $heal;
	}

	public function setWeapon($weapon){
		$this->weapon = $weapon;
	}

}


//Orque legacy I

class Zombie extends Orque {

	private $unbreakable;
	private $regenerate;

	public function __construct($nom, $force, $exp, $spell, $weapon, $unbreakable,$regenerate){
		parent::__construct($nom, $force, $exp, $spell, $weapon);
		$this->unbreakable = $unbreakable;
		$this->regenerate = $regenerate;
	}
	public function getUnbreakable(){
		return$this->unbreakable;
	}

	public function getRegenerate(){
		return$this->regenerate;
	}

	public function setUnbreakable($unbreakable){
		$this->unbreakable = $unbreakable;
	}

	public function setRegenerate($regenerate){
		$this->regenerate = $regenerate;
	}

}


//Orque legacy II

class SuperZombie extends Orque {

	private $taste;
	private $smell;

	public function __construct($nom, $force, $exp, $spell, $weapon, $taste ,$smell){
		parent::__construct($nom, $force, $exp, $spell, $weapon);
		$this->taste = $taste;
		$this->smell = $smell;
	}
	public function getTaste(){
		return$this->taste;
	}

	public function getSmell(){
		return$this->smell;
	}

	public function setTaste($taste){
		$this->taste = $taste;
	}

	public function setSmell($smell){
		$this->smell = $smell;
	}

}