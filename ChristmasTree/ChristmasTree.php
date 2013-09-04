<?php


// require_once 'ChristmasTreeInterface.php';
// require_once 'Tree.php';

class ChristmasTree extends Tree implements ChristmasTreeInterface{
	
	//properties
	private $_tip;
	private $_bruch;
	private $_trunk;
	
	//methods
	public function getDescription(){
		echo "ChristmasTree";
	}
	
}