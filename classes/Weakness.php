<?php
class Weakness {
	public $weakness;
	public $mult;
	function __construct($type,$mult) 
	{
		$this->weakness = $type;
		$this->mult = $mult;
	}
	function __get($key)
	{
		return $this->get($weakness[$key]);
	}
}