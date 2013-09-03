<?php

class CheesBurger extends Food
{
	
	//methods
	private $_description;
	private $_Foodnumber;
	
	
	public function getFoodNumber()
	{
		return $this->_Foodnumber;
	}
	
	function __construct()
	{
		$this->_Foodnumber=1;
		$this->setPrice(10);
	}
	

}