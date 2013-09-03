<?php

class FoodListTest extends PHPUnit_Framework_TestCase
{
	private $_foodList;
	private $_realFoodList;
	
	public function setUp()
	{
		$this->_foodList=new FoodListMock();
		$this->_realFoodList=new FoodList();
		$this->_realFoodList->addFoodToList(new Hamburger(),0);
		$this->_realFoodList->addFoodToList(new CheesBurger(),1);
	}
	
	
	public function testGetFoodFromList()
	{
		$food=$this->_foodList->getFood('hamburger');
		$this->assertEquals(null, $food);		//null because it is a mock
	}
	
	public function testAddFoodToList()
	{
		$this->_realFoodList->addFood(new Sandwitch(),3);
		$this->assertEquals(3, $this->_realFoodList->getCountFood());
	}

	public function testgetCheesBurgerNumber()
	{
		
		$this->assertEquals(1, $this->_realFoodList->getCheesBurger());
	}

	
	public function foofItemProvider()
	{
		return array(
				array(new Hamburger()),
				array(new CheesBurger()),
				array(new Sandwitch()),
				);
	}
	/**
	 * @dataProvider foodItemProvider
	 */
	public function getFoodItem($foodItem)
	{
		$this->assertInstanceOf('Food', $this->_realFoodList->getFoodItem());
		
	}
	
	
	

	
	
	
	
}