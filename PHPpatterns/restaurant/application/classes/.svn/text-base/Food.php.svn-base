<?php

class Food implements FoodInterface
{
	
	protected $_sauceType;
	protected $_breadType;
	protected $_toppings=array();
	protected $_price;
	protected $_foodNumber;
	
	public function getPrice()
	{
		
		return $this->_price;
	}
	
	public function setPrice($price)
	{
		$this->_price=$price;
	}
	
	
	//
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
	public function getFoodNumber()
	{
		return $this->_foodNumber;
	}
	public function setFoodNumber($foodNumber)
	{
		$this->_foodNumber=$foodNumber;
	}
	
	
}