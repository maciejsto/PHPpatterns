<?php

class Beef extends AbstractToppings{
	
	
	
	function __construct()
	{
		
		$this->setPrice(4);
	}
	
	
	function __toString()
	{
		return  'adding beef';
	}
	
}