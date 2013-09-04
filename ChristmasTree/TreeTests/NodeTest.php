<?php

// require_once dirname(__DIR__).'/classes/Node.php';
// require_once dirname(__DIR__).'/config/CustomAutoloader.php';

class NodeTestT extends PHPUnit_Framework_TestCase{
	
	//containers, fixtures
	protected $_node;
	private $_tear;
	
	public function setUp(){
		
// 		$autoloader=new Autoloader();
		$a=Autoloader::init();
		$this->_node=new Node(5,1);
	}
	
	//======================================================testIsInstanceOfNodeClass
	public function testIsInstanceOfNodeClass(){
		$this->assertInstanceOf('Node', $this->_node);
	}
	//======================================================testGetValue
	public function testGetValue(){
		$this->assertEquals(5, $this->_node->getValue());
	}
	//======================================================testSetValue
	public function testSetValue(){
		$value=$this->_node->setValue(10);
		$this->assertEquals(10, $this->_node->getValue());
	}
	//======================================================testgetId
	public function IDprovider(){
		
		return array(
				array(1),
				);
	}
	/**
	 * @dataProvider IDprovider
	 */
	public function testGetId($id){
		$this->assertEquals($id, $this->_node->getId()); //??
	}
	//======================================================testSetId
	public function testSetId(){
		$id=$this->_node->setId(0);
		$this->assertEquals(0,$id);
	}
	//======================================================&getReference
	public function &getReference(){
		$this->assertEquals(10, $this->_node->getReference());
	}
	//======================================================TEST GET PARENT
	public function testGetParent(){
		
		$parent=$this->_node->getParent();
		$this->assertNotInstanceOf('Node', $parent);
// 		$this->assertTrue(is_object($parent));
		$this->assertFalse(isset($parent));
	}
	
	public function testGetChildren(){
		$children=$this->_node->getChildren();
		$this->assertInternalType('array', $this->_node->getChildren());
		$this->assertEmpty($children);
		
		//add node
		
// 		$this->assertInternalType('string',$children);
	}
	
	
	
	
}