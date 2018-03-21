<?php

class Charmeleon extends Pokemon
{
	function __construct()
	{
		parent::__construct('Charmeleon',EnergyTypes::$FIRE,60);
		$this->attack[] = New Attack('Head Butt', '10');
		$this->attack[] = New Attack('Flare', '30');
		$this->weakness[] = new Weakness("Water",2);
		$this->resistance[]= new Resistance("Lightning",10);
	}
		function __toString()
	{
		return $this->name . $this->energyType . $this->hitpoint . $this->health;
	}
}