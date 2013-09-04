<?php

class Cashier 
{
	private $_builder;
	
	
	public function setKitchenBuilder(FoodBuilder $kitchenBuilder)
	{
		$this->_builder=$kitchenBuilder;
	}

	public function getClientFood()
	{
		return $this->_builder->getFood();
	}
	
	public function getHamburgerDescription()
	{
		return $this->_builder->getDescription();
	}
	
	
	public function makeClientFood()
	{
		$this->_builder->makeFood();
		$this->_builder->buildBread();
		$this->_builder->buildSauce();
		$this->_builder->buildToppings();
		
	}
	
	
	
	
	
}