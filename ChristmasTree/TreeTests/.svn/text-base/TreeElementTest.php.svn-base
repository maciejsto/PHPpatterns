<?php

// require_once dirname(__DIR__).'/classes/TreeElement.php';


class TreeElementTest extends PHPUnit_Framework_TestCase{
	
	//=========================================================PROPERTIES,FIXTURES
	//fixtures
	private $_reflection;
	
	//=========================================================SETUP
	public function setUp(){
		
	}
	
	//=========================================================INTERFACE PROVIDER
	public function interfaceProvider(){
		return array(
				array('TreeElementInterface'),
				);
	}
	//=========================================================TEST IMPLEMENTS INTERFACE
	/**
	 * @dataProvider interfaceProvider
	 */
	public function testImplementsInterface($interface_in){
		
		$this->_reflection=new ReflectionClass('TreeElement');
		$interfaces=$this->_reflection->getInterfaceNames();
		$this->assertEquals($interface_in,$interfaces[0]);
		
	}
	
	
	
	
	
}