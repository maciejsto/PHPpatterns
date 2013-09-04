<?php 




require_once 'C:\xampp\htdocs\ChristmasTree\tests\TreeDecoratorTest.php';
require_once 'C:\xampp\htdocs\ChristmasTree\ChristmasTree.php';
require_once 'C:\xampp\htdocs\ChristmasTree\ChristmassTreeWithLigths.php';




/**
 * @backupGlobals disabled
 */
class TreeDecoratorTest extends PHPUnit_Framework_TestCase{
	
	private $_christmasTree;
	private $_decorator;
	private $_reflection;
	protected $backupGlobalsBlacklist =
	array(
			'_CONSOLE_COLOR_CODES',
			'_ENV',
			'_POST',
			'_GET',
			'_COOKIE',
			'_SERVER',
			'_FILES',
			'_REQUEST'
	);
	
	
	public function setUp(){
		$this->_christmasTree=new ChristmasTree();
		$this->_decorator=new ChristmassTreeWithLigths($this->_christmasTree);
		$this->_reflection=new ReflectionClass($this->_decorator);
		
	}
	
// 	public function descriptionProvider(){
		
// 		return array(
// 				array('Tree with Ligths'),
// 				//put here another sets of data 
// 				);
// 	}
	
	public function testIfDecoratorExists(){
		$this->assertInstanceOf('TreeDecorator', $this->_decorator);
	}
	
	
	public function testIfGetDescriptionFunctionExists(){
		
		$result=class_exists('TreeDecorator');
		var_dump($result);
		
		$this->assertTrue($result);
		
	}
	
	
	


	
	
	
	
	
	
	
	
	
	
// 	public function TestIFDecoratorHasChildClassTreeWithLigths(){
// // 		$this->_reflection->
// 	}
}

?>