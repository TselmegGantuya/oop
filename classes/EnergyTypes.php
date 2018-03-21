<?php
class EnergyTypes {
	
	public $type;
	public static $FIRE = "Fire";
	public static $LIGHTNING = "Lightning";

	function __construct($type) {
		$this->type = $type;
	}
}