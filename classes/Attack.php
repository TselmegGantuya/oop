<?php

class Attack
{
	public $attack;
	public $dmg;
	public function __construct($name, $dmg)
	{
		$this->attack =$name;
		$this->dmg = $dmg;
	}
	public function __toString()
	{
		return array('name' => $this->attack,'dmg' => $this->dmg);
	}
}
