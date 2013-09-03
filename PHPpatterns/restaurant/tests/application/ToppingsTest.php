<?php

class ToppingsTest extends PHPUnit_Framework_TestCase
{
	private $_toppingList;
	
	public function setUp()
	{
		$this->_toppingList=array(
				'salad'=>new Salad,
				'ham'=>new Ham()
				);
		
// 		$this->_toppingList[]=new Salad();
// 		$this->_toppingList[]
	}
	
	
	function testGestToppingPrice()
	{
		$price=$this->_toppingList['salad']->getPrice();
		$this->assertEquals(5, $price);
		
	}
	
}