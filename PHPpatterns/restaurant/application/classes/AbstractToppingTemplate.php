<?php

class AbstractToppings implements ToppingsInterface
{
	private $_price;
	
	public function setPrice($newprice)
	{
		$this->_price=$newprice;
	}
	
	public function getPrice()
	{
		return $this->_price;
	}
}
