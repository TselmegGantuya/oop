<?php
class Pokebag 
{
	public $pokemons;

	function __get($key)
	{
		return $this->get($key);
	}
	function add($pokemon)
	{
		$this->pokemons[]=$pokemon;
	}
	function delete($name)
	{
		for($i=0;$i<sizeof($this->pokemons);$i++)
		{
			if($this->pokemons[$i]->name == $name)
			{
				array_splice($this->pokemons, $i,1);
				break;
			}
		}
	}
	function all()
	{
		if($this->pokemons != null)
		{
			$hi="";
			for($i=0;$i<sizeof($this->pokemons);$i++)
			{
				$hi = $hi . $this->pokemons[$i]->name;
			}	
			echo 'This bag countains ' . $hi;

		}
		else
		{

		echo 'empty';
		}
	}
	function reset()
	{
		$this->pokemons = null;
	}

}