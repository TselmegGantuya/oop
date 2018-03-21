<?php

class Pokemon
{
	public $name;
	public $energyType;
	public $attack;
	public $weakness;
	public $resistance;
	public $hitpoint;
	private $health;

	function __construct($name, $energyType,$hitpoint)
	{
		$this->name = $name;
		$this->energyType = $energyType;
		$this->hitpoint = $hitpoint;
		$this->health = $hitpoint;
	}
	function __set($key,$value)
	{
		$this->set($key,$value);
	}
	function __get($key)
	{
		return $this->get($key);
	}
	public function attack($name,$attacked)
	{

		for($i=0;$i<sizeof($this->attack);$i++)
		{
			if($this->attack[$i]->attack == $name)
			{
				$attacked->attacked($this->attack[$i]->dmg,$this->energyType);
			}
		}
	}
	public function attacked($dmg,$type)
	{
		for($i=0;$i<sizeof($this->weakness);$i++)
		{
			if($this->weakness[$i]->weakness == $type)
			{
				$dmg = $dmg *$this->weakness[$i]->mult;
			}
			for($i=0;$i<sizeof($this->resistance);$i++)
			{
				if($this->resistance[$i]->resistance == $type)
				{
					$dmg = $dmg - $this->resistance[$i]->numb;
				}
			}
			
		}
		$this->health = $this->health - $dmg;
	}
}