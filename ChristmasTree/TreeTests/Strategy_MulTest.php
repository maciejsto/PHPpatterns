<?php
// define('PATH', dirname(__DIR__));

// require_once PATH.'/classes/Strategy.php';
// require_once PATH.'/classes/Strategy_Mul.php';

class Strategy_MulTest extends PHPUnit_Framework_TestCase{
	
	//============================================================PROPERTIES
	private $_mulStrategy;
	
	//============================================================SET UP
	public function setUp(){
		
		$this->_mulStrategy=new MyStrategy('mul');
		
	}
	//============================================================PROVIDER
	public function provider(){
		return array(
				array(array(1,1)),
				array(array(5,5)),
				array(array(10,10)),
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
	public function testMul($data_in){
		$this->assertInternalType('array',$data_in);
// 		$this->assertTrue(is_array($data_in));
		
// 		foreach ($data_in as $data){
			
// 			$res=$this->_mulStrategy->op($data_in);
// 			$this->assertEquals($data_in[0]*$data_in[1], $res);			
			
// 		}
		
		
		
		
	}
}