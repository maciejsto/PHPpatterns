<?php
class Salad extends AbstractToppings
{
	
	
	
	function __construct()
	{
		$this->setPrice(5);
	}
	function __toString()
	{
		return 'adding salad';
	}
}