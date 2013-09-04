<?php
final class Client 
{
	public $_clientOrderNumber;
	
	public function getOrderNumber()
	{
		return $this->_clientOrderNumber;
	}
	public function setClientOrderNumber($number)
	{
		$this->_clientOrderNumber=$number;
	}
	
	public function __construct()
	{
		$this->_clientOrderNumber=null;
	}
	
	public function orderFood($food)
	{
		
// 		$this->setClientOrderNumber($foodNumber);
		
	}
	
	public function getFoodPrice(Food $food)
	{
		return $food->getPrice();
	}
	
}