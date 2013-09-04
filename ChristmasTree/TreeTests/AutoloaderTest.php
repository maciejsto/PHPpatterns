<?php
use \Mockery as m;

class AutoloaderTest extends PHPUnit_Framework_TestCase{
	
	
	
	//fixtures
	private $_autoloader;
	
// 	public function setUp(){
// 			$this->_autoloader=new Autoloader();
			
			
// 	}
	/**
	 * @tear down is invoked after each test and clears the state of 
	 * variables and objects
	 * (non-PHPdoc)
	 * @see PHPUnit_Framework_TestCase::tearDown()
	 */
	public function tearDown(){
// 		m::close();
		\Mockery::close();
	}
	
	
	
// 	public function testInstanceOf(){
// 		$this->assertInstanceOf('Autoloader', $this->_autoloader);
// 	}
	
	
	/**
	 * @testing PHPUnitMock and Mockery library
	 */
	public function testMock(){
		//with Mockery
		$phpUnitMock=$this->getMock('AClassToBeMocked');
		$phpUnitMock->expects($this->once())->method('someMethod');
// 		$mock=m::mock('AClassToBeMocked');
		
		$mock=\Mockery::mock('InexistenceClass');
		$mock->shouldReceive('someMethod')->once()->andReturn('1');
		
		
// 		$mock->shouldReceive('getColor')->times(2)->andReturn('blue','red');
// 		$this->assertEquals('bluee', $mock->getColor('Earth'));
// 		$this->assertEquals('red', $mock->getColor('Mars'));
		
		$someclass=new someClass();
		$someclass->doSomething($phpUnitMock);
		$this->assertEquals('1', $someclass->doSomething($mock));
	}
	
	
	
	
	
}


	/**
	 * @this is an example class which is going to be mocked 
	 * with PHPUnitMock
	 * @author mstoklos
	 *
	 */
	class AClassToBeMocked{
		public function someMethod(){
			
		}
		
		
	}
	/**
	 * @this class has a function which accepts a mocked class 
	 * and as a return value it invokes a method which is empty 
	 * so it does nothing 
	 * @author mstoklos
	 *
	 */
	class someClass{
		function doSomething( $anotherobject){
			return $anotherobject->someMethod();
		}
	}