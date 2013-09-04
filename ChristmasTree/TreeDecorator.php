<?php

// require_once 'ChristmasTreeInterface.php';
// require_once 'Tree.php';

abstract class TreeDecorator implements  ChristmasTreeInterface{
	
	
	protected  $_tree;
	
	
	public function __construct( $tree){
		$this->_tree=$tree;
	}
	
	
	public function getDescription(){
		
		return $this->_tree->getDescription();
		
	}
	
}