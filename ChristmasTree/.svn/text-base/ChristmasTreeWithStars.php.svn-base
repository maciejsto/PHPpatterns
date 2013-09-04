<?php

// require_once 'TreeDecorator.php';
// require_once 'Tree.php';

class ChrustmasTreeWithStars extends TreeDecorator{
	
	public function __construct(ChristmasTree $newTree){
		parent::__construct($newTree);
		
		return "adding stars";
	}
	
	public function getDescription(){
		return $this->_tree->getDescription().' with Stars';
		
	}
	
}