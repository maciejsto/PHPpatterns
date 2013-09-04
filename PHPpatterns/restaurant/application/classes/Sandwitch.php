<?php

class Sandwitch extends Food
{
	//properties
// 	private $_sauceType;
// 	private $_breadType;
// 	private $_toppings=array();
	
	//methods
	
	public function setBreadType($bread)
	{
		$this->_breadType=$bread;
	}
	public function getBreadType()
	{
		return $this->_breadType;
	}
	
	public function setSauceType($sauce)
	{
		$this->_sauceType=$sauce;
	}
	
	public function getSauceType()
	{
		return $this->_sauceType;
	}
	
	
	public function addToppings(AbstractToppings $topping)
	{
		$this->_toppings[]=$topping;
		return $this;
	}
	
	public function GetToppings()
	{
		return $this->_toppings;
	}
	
	public function getCountToppings()
	{
		return count($this->_toppings);
	}
}