<?php

class CashierTest extends PHPUnit_Framework_TestCase
{
	private $_cashier;
	private $_kitchenBuilder;
	private $_foodList;
	
	
	function setUp()
	{
		$this->_cashier=new Cashier();
		$this->_kitchenBuilder=new SandwitchBuilder();
		$this->_foodList=new FoodList();
		$this->_foodList->addFoodToList(new Hamburger());
		$this->_foodList->addFoodToList(new Sandwitch());
	}
	
	public function testCashierClassAgregatesKitchen()
	{
		$this->assertClassHasAttribute('_builder','Cashier');
	}
	
	public function testSetKitchen()
	{
		$this->_cashier->setKitchenBuilder($this->_kitchenBuilder);
		$this->assertInstanceOf('FoodBuilder', $this->_kitchenBuilder);
	}
	
	function foodProvider()
	{
		return array(
// 				array($this->_foodList->getHamburger()),
				array(new Hamburger()),
				
				);
	}
	/**
	 * @dataProvider foodProvider
	 */
	public function testGetFoodPrice(Food $food)
	{
		$foodPrice=$food->getPrice();
		$this->assertEquals(5, $foodPrice);
	}
	
	
	
	
	public function testMakeClientFood()
	{
		$client=new Client();
		$foodlist=new FoodList();
		
		$client->orderFood($foodlist->getHamburger());
		
		$kitchenBuilder=new HamburgerBuilder();
		$this->_cashier->setKitchenBuilder($kitchenBuilder);
		$this->_cashier->makeClientFood();
		$clientFood=$this->_cashier->getClientFood();
		
		
		$this->assertInstanceOf('Hamburger', $clientFood);
		
		
		print_r($clientFood);
				
		
	}
	
	public function testMakeCheesBurger()
	{
		$client=new Client();
// 		$client->orderFood($this->_foodList->getCheesBurger());
		$client->orderFood($this->_foodList->getFoodItem(new Hamburger()));
		
		$this->_cashier->setKitchenBuilder(new CheesBurgerBuilder());
		
		
		$this->_cashier->makeClientFood();
		$clientFood=$this->_cashier->getClientFood();
		$this->assertInstanceOf('CheesBurger', $clientFood);
		
		

	}
	
	

	
	
	
	
}