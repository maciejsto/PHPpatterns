<?php
class Hamburger extends Food
{
	private $_description;
	private $_Foodnumber;
	
	
	public function getFoodNumber()
	{
		return $this->_Foodnumber;
	}
	
	
	function __construct()
	{
		$this->setPrice(5);
	}
	
	


	
	
}