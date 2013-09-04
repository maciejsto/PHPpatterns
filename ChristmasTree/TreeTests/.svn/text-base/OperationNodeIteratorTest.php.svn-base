<?php

// require_once dirname(__DIR__).'/classes/OperationNodeIterator.php';
// require_once dirname(__DIR__).'/classes/MathTree.php';
// require_once dirname(__DIR__).'/classes/Node.php';
// require_once dirname(__DIR__).'/classes/Operation.php';


class OperationNodeIteratorTest extends PHPUnit_Framework_TestCase{
	
	//containers, fixtures
	protected $_node;
// 	private $_tear;
	private $_tree;
	private $_iterator;
	
	public function setUp(){
		
// 		$this->_node=new Node(5,1);
		$tree=$this->_tree=new MathTree();
		$n1=new Node(1,100);
		$n2=new Operation('add',101);
		$n3=new Node(2,102);
		$n4=new Operation('mul',103);
		$n5=new Operation('mul',104);
		$n6=new Operation('mul',105);
		
		$this->_tree->addNode(null,$n1);
		$this->_tree->addNode($n1,$n2);
		$this->_tree->addNode($n1,$n3);
		$this->_tree->addNode($n3,$n4);
		$this->_tree->addNode($n4,$n5);
		$this->_tree->addNode($n4,$n6);
		
		
		
// 		$this->_iterator=new TreeIterator($this->_tree);
		$this->_iterator=new OperationNodeIterator($this->_tree);
	}
	public function testInstanceOf(){
// 		print_r($this->_iterator);
		$this->assertInstanceOf('OperationNodeIterator', $this->_iterator);
	}
	
	public function testCurrent(){
		$this->_iterator->rewind();
// 		print_r($this->_iterator->current());
		$this->assertInstanceOf('Operation', $this->_iterator->current());
// 		print_r($this->_iterator->_oplist);
// 		$this->assertEquals($this->_tree->getNode(5),$this->_iterator->current());
	}
	
	public function testNext(){
// 		print_r($this->_iterator->current());
// 		print_r($this->_iterator->next());
// 		var_dump($this->_iterator->next());
// 		var_dump($this->_iterator->next());
// 		var_dump($this->_iterator->next());
// 		var_dump($this->_iterator->next());
		$this->assertInstanceOf('Operation', $this->_iterator->next());
	}
	
	
}