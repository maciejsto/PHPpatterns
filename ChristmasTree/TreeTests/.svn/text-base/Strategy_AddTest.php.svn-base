<?php
define('PATH', dirname(__DIR__));

// require_once PATH.'/classes/Strategy.php';
// require_once PATH.'/classes/Strategy_Add.php';
// require_once PATH.'/classes/Node.php';

class Strategy_AddTest extends PHPUnit_Framework_TestCase{
	
	//============================================================PROPERTIES
	private $_addStrategy;
	
	//============================================================SET UP
	public function setUp(){
		$this->_addStrategy=new MyStrategy('add');
		
	}
	//============================================================PROVIDER
	public function provider(){
		return array(
				array(array(new Node(1,1))),
				array(array(new Node(2,2),new Node(2,3))),
// 				array(array(null,null)),
				
				);
	}
	//============================================================TEST INSTANCE OF
	public function testInstanceOf(){
// 		$this->assertInstanceOf('Strategy_Add', $this->_addStrategy);
	}
	//============================================================TEST ADD
	/**
	 * @dataProvider provider
	 */
	public function testAdd($data_in){
		$this->assertInternalType('array',$data_in);
// 		$this->assertTrue(is_array($data_in));
		
// 		foreach ($data_in as $data){
			
// // 			$res=$this->_addStrategy->add($data_in);
// // 			$this->assertEquals($data_in[0]+$data_in[1], $res);			
			
// 		}
		$res=$this->_addStrategy->op($data_in);
		
// 		$this->assertEquals(4, $res);
		
	}
}