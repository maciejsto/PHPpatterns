<?php



abstract class FoodBuilder 
{
	//reference to food object
	protected $_food;
	
	
	
	public function getFood()
	{
		return $this->_food;
	}
	
	abstract function makeFood();
	

	
	
	
	
	public abstract function buildSauce();
	public abstract function buildBread();
	public abstract function buildToppings(); 
	
	
		
}