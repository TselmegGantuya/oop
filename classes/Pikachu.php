<?php

class Pikachu extends Pokemon
{
	function __construct()
	{
		parent::__construct('Pikachu',EnergyTypes::$LIGHTNING,60);
		$this->attack[] = New Attack('Pika Punch', '20');
		$this->attack[] = New Attack('Electric Ring', '50');
		$this->weakness[] = new Weakness("Fire",1.5);
		$this->resistance[] = new Resistance("Fighting",20);
	}
	function __toString()
	{
		return $this->name . $this->energyType . $this->hitpoint . $this->health;
	}
}	