<?php


/**
 * Client class gives a user possibility to order food 
 * from restautrant 
 * 
 * @author mstoklos
 *
 */
class ClientTest extends PHPUnit_Framework_TestCase
{
	private $_client;
	private $_foodList;
	
	public function setUp()
	{
		$this->_client=new Client();
		$this->_foodList=new FoodList();
		$this->_foodList->addFoodToList(new Hamburger());
		$this->_foodList->addFoodToList(new CheesBurger());
	}
	
	public function testInstanceOf()
	{
		$this->assertInstanceOf('Client', $this->_client);
	}
	
	/**
	 * check how many parameters does constructor take
	 */
	public function testClientClassHasConstructor()
	{
		$reflection =new ReflectionObject($this->_client);
		$constructor=$reflection->getConstructor();
		$params=$constructor->getParameters();
		$paramsCount=count($params);
		
		$this->assertEquals(0, $paramsCount);
	}
	
	
	
	public function foodProvider()
	{
		return array(
				array(new FoodList()),
				);
	}
	/**
	 * @dataProvider foodProvider
	 */
	public function testOrderFood($foodlist)
	{
		$this->_client->orderFood($this->_foodList->getCheesBurger());
		
		
// 		$this->assertEquals(1, $this->_client->getOrderNumber());
		
		
	}
	
	
	
	
	
	
	
	

}