<?php

class FoodList 
{
	
	
	private $_foodList=array();
	
	
	
	
	
	public function addFoodToList(Food $food)
	{
		$this->_foodList[]=$food;
		
	}
	
	
	
	public function getHamburger()
	{
		
		foreach ($this->_foodList as $key => $food) {
			if($food instanceof Hamburger){
				return $food->getFoodNumber();
			}
		}
// 		return $ret;
	}
	
	public function getPizza($pizzaType)
	{
		//TODO
	}
	
	public function getCheesBurger()
	{
		
		for($i=1;$i<=count($this->_foodList);$i++)
		{
			if($this->_foodList[$i] instanceof CheesBurger) return $this->_foodList[$i]->getFoodNumber();
		}
		//TODO
	}
	
	public function getClassicSandwitch()
	{
		//TODO
	}
	
	
	public function getCustomSandwitchWith($ingridients)
	{
		//TODO
	}
	
	
	public function addFood(Food $newFood,$foodNumber)
	{
		$this->_foodList[]=$newFood;
		$newFood->setFoodNumber($foodNumber);
		
	}
	
	public function getCountFood()
	{
		$count=count($this->_foodList);
		return $count;
	}
	
	public function getFoodItem(Food $item)
	{
		if(in_array($item, $this->_foodList)){
			return $item;
		}
	}
	

	

	

	
}