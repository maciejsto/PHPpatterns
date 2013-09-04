<?php

class Chees extends AbstractToppings{
	
	function __construct()
	{
		$this->setPrice(3);
	}
	
	function __toString()
	{
		return 'adding Chees';
	}
	
}