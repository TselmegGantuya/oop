<?php
class Resistance {
	public $resistance;
	public $numb;
	function __construct($type,$numb) 
	{
		$this->resistance = $type;
		$this->numb = $numb;
	}
	function __get($key)
	{
		return $this->get($resistance[$key]);
	}
}