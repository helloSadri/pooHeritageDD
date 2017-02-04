<?php

// Vagabond

class Vagabond extends Perso{

	private $spell;
	private $weapon;

	public function __construct($nom, $force, $exp, $spell, $weapon){
		parent::__construct($nom, $force, $exp);
		$this->spell = $spell;
		$this->weapon = $weapon;
	}
	public function getSpell(){
		return$this->spell;
	}

	public function getWeapon(){
		return$this->weapon;
	}

	public function setSpell($spell){
		$this->spell = $spell;
	}

	public function setWeapon($weapon){
		$this->weapon = $weapon;
	}

}

// Vagabond legacy I

class Spy extends Vagabond{

	private $disappear;
	private $metamorph;

	public function __construct($nom, $force, $exp, $spell, $weapon, $disappear,$metamorph){
		parent::__construct($nom, $force, $exp, $spell, $weapon);
		$this->disappear = $disappear;
		$this->metamorph = $metamorph;
	}
	public function getDisappear(){
		return$this->disappear;
	}

	public function getMetamorph(){
		return$this->metamorph;
	}

	public function setDisappear($disappear){
		$this->disappear = $disappear;
	}

	public function setMetamorph($metamorph){
		$this->metamorph = $metamorph;
	}

}

// Vagabond legacy II

class Divinity extends Vagabond{

	private $hearing;
	private $touch;


	public function __construct($nom, $force, $exp, $spell, $weapon, $hearing ,$touch){
		parent::__construct($nom, $force, $exp, $spell, $weapon);
		$this->hearing = $hearing;
		$this->touch = $touch;
	}
	public function getHearing(){
		return$this->hearing;
	}

	public function getTouch(){
		return$this->touch;
	}

	public function setHearing($hearing){
		$this->hearing = $hearing;
	}

	public function setTouch($touch){
		$this->touch = $touch;
	}

}