<?php

class SandwitchTest extends PHPUnit_Framework_TestCase
{
	private $_sandwitch;

	
	function setUp()
	{
		$this->_sandwitch=new Sandwitch();
	}
	
	
	public function testInstanceOfFood()
	{
		$this->assertInstanceOf('Food', $this->_sandwitch);
	}
	
	
	public function testProperties()
	{
		$reflection=new ReflectionClass('Sandwitch');
		$propertiesArray=$reflection->getProperties();
		
		
		$this->assertEquals('_sauceType', $propertiesArray[0]->getName());
		$this->assertEquals('_breadType', $propertiesArray[1]->getName());
		$this->assertEquals('_toppings', $propertiesArray[2]->getName());
		
		//topping now is an object because i have used reflection class 
		$toppings=$propertiesArray[2];
		

	}
	public function testSetBreadType()
	{
		$breadType=$this->_sandwitch->setBreadType('dark');
		$this->assertEquals('dark', $this->_sandwitch->getBreadType());
	}
	
	public function testSetSauceType()
	{
		$sauceType=$this->_sandwitch->setSauceType('spicy');
		$this->assertEquals('spicy', $this->_sandwitch->getSauceType());
	}
	
	
	public function toppingsProvider()
	{
		return array(
				array(array(new Salad(),new Ham(),new Onion(),new Tomato())),
				);
	}
	
	
	/**
	 * @dataProvider toppingsProvider
	 */
	public function testSetSToppings($toppings)
	{
		
		$this->assertInternalType('array', $toppings);
		$this->_sandwitch->addToppings($toppings[0])->addToppings($toppings[1])->addToppings($toppings[2])->addToppings($toppings[3]);
// 		$this->_sandwitch->addToppings($toppings[0]);
		
		$this->assertInternalType('array', $this->_sandwitch->GetToppings());
		$sandwitchToppings=$this->_sandwitch->GetToppings();
		
		$this->assertInstanceOf('AbstractToppings', $sandwitchToppings[0]);
		$this->assertInstanceOf('Salad', $sandwitchToppings[0]);
		
		
	}
	
	public function testGetCountToppings()
	{
		
		$toppingsCount=$this->_sandwitch->getCountToppings();
		$this->assertEquals(0, $toppingsCount);
		
		$this->_sandwitch->addToppings(new Salad());
		$this->assertEquals((1), $this->_sandwitch->getCountToppings());
	
	}
	
	
	
	
	
	
	
	
	
	
}