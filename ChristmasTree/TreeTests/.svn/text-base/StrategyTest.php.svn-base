<?php
// require_once dirname(__DIR__).'/classes/Strategy.php';
// require_once dirname(__DIR__).'/classes/Node.php';


class StrategyTest extends PHPUnit_Framework_TestCase{

	//containers, fixtures
	private $_node;
	private $_strategy;
	private $_reflection;
	//============================================================SETUP
	public function setUp(){

		$this->_node=new Node(5);
		$this->_strategy=new MyStrategy('add');
		$this->_reflection=new ReflectionClass('MyStrategy');

	}
	//============================================================TEST INSTANCE OF
	public function testInstanceOf(){
		
		$this->assertInstanceOf('MyStrategy',$this->_strategy);
	}
	//============================================================TEST IMPLEMENTS INTERFACE
	public function testImplementesInterface(){
		
		$interfaces=$this->_reflection->getInterfaces();
		
		$res=array_key_exists('StrategyInterface', $interfaces);
		
		foreach ($interfaces as $key => $interface) {
			
			$res2=in_array($interface, $interfaces);
			$this->assertTrue($res);
		}
// 		
		$this->assertTrue($res);
// 		var_dump($interfaces['StrategyInterface']);
		
		$this->assertArrayHasKey('StrategyInterface', $interfaces);
		
	}
	//============================================================TEST DO OPERATION 
	public function testDoOperation(){
		
	}
	//============================================================TEST SHOW RESULT
	public function testShowResult(){
		
	}
	
}