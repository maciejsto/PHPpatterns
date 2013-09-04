<?php


class FoodListMock {
	
	protected $_foodList;
	
	public function __construct()
	{
		$this->_foodList=array(
				
				"jankfood"=>array(
						1=>'hamburger',
						2=>'cheesburger',
						3=>'pizza'),
				"healthyfood"=>array(
						1=>'greeksalad',
						2=>'pasta',
						3=>'fruits')
				);
	}
	
	public function __call($function , $arguments)
	{
		if(!method_exists($this, $function))
		{
					return null;			
		}
		
	}
	
}