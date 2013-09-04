<?php
// require_once 'TreeDecorator.php';
// require_once 'Tree.php';

class ChristmassTreeWithLigths extends TreeDecorator{
	
	public function __construct($newTree){
		//invoking parent constructor
		parent::__construct( $newTree);
	}
	
	public function getDescription(){
		return $this->_tree->getDescription().' with Lights';
	}
	
	
	
	
}