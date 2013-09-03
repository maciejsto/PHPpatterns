<?php

class CheesBurgerBuilder extends FoodBuilder
{
	private $_cheesburger;

	function __construct()
	{
		$this->makeFood();
		
	}

	public function makeFood()
	{
		$this->_food=new CheesBurger();
	}
	
	public function buildBread()
	{

		$this->_food->setBreadType('dark');
	}
	public function buildSauce()
	{
		$this->_food->setSauceType('medium');
	}
	public function buildToppings()
	{
		$this->_food->addToppings(new Salad())->addToppings(new Onion())->addToppings(new Tomato())->addToppings(new Ham());
		$this->_food->addToppings(new Beef());
		$this->_food->addToppings(new Chees());
	}
		
	
// 	public function getCheesBurger()
// 	{
// 		return $this->_food;
// 	}

	

}