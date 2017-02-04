<?php 

//Paladin

class Paladin extends Perso{

	private $order;
	private $weapon;

	public function __construct($nom, $force, $exp, $order, $weapon){
		parent::__construct($nom, $force, $exp);
		$this->order = $order;
		$this->weapon = $weapon;
	}
	public function getOrder(){
		return$this->order;
	}

	public function getWeapon(){
		return$this->weapon;
	}

	public function setOrder($order){
		$this->order = $order;
	}

	public function setWeapon($weapon){
		$this->weapon = $weapon;
	}

}



//Paladin legacy I

class Vampire extends Paladin {

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


//Paladin legacy II

class Regular extends Paladin {

	private $hearing;
	private $sight;


	public function __construct($nom, $force, $exp, $spell, $weapon, $hearing ,$sight){
		parent::__construct($nom, $force, $exp, $spell, $weapon);
		$this->hearing = $hearing;
		$this->sight = $sight;
	}
	public function getHearing(){
		return$this->hearing;
	}

	public function getSight(){
		return$this->sight;
	}

	public function setHearing($hearing){
		$this->hearing = $hearing;
	}

	public function setSight($sight){
		$this->sight = $sight;
	}

}