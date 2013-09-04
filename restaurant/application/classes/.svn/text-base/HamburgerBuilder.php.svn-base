<?php

class HamburgerBuilder extends FoodBuilder
{
	private $_description;

	function __construct()
	{
		$this->makeFood();
	}

	
	function makeFood()
	{
		$this->_food=new Hamburger();
	}
	
	public function buildBread()
	{
		
		$this->_food->setBreadType('white');
	}
	public function buildSauce()
	{
		$this->_food->setSauceType('spicy');
	}
	public function buildToppings()
	{
		$this->_food->addToppings(new Salad())->addToppings(new Onion())->addToppings(new Tomato())->addToppings(new Ham());
	}
	
	public function getPrice()
	{
		
		$toppings=$this->_food->GetToppings();
		
		foreach ($toppings as $key => $value) {
			$value->getPrice();
			
		}
		
		
	}

	
	
	
	
	
	
	
	
	
	
	
	
}