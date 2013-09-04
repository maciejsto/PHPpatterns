<?php
// require_once dirname(__DIR__).'/classes/Operation.php';

class OperationTest extends PHPUnit_Framework_TestCase{
	
	private $_operation;
	
	public function setUp(){
		$this->_operation=new Operation('add',1);
	}
	
	public function testInstanceOf(){
		$this->assertInstanceOf('TreeElement', $this->_operation);
	}
	public function testGetValue(){
		$operationType=$this->_operation->getOperationType();
		$this->assertEquals('add', $operationType);
	}
	
	public function testGetOperationResult(){
		$result=$this->_operation->getOperationResult();
		$this->assertEquals(null, $result);
	}
	
	
}