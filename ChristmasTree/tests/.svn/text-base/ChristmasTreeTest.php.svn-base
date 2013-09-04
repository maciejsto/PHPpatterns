<?php 

require_once 'C:\xampp\htdocs\ChristmasTree\ChristmasTree.php';


/**
 * @backupGlobals disabled
 */
class ChristmasTreeTest extends PHPUnit_Framework_TestCase{
	
	
	//blacklist for globals causing serialization problems
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

	private $_christmasTree;

	public function setUp(){
		

		$this->_christmasTree=new ChristmasTree();
	}

	public function testIfChristmasTreeExists(){
		
		$this->assertInstanceOf('ChristmasTree', $this->_christmasTree);
	}
	
	public function provider(){
		return array(
// 				array(),
				array(true),
				);
	}
	/**
	 * @dataProvider provider
	 * @param unknown_type $provider
	 */
	public function testFalse($provider){
		
		$this->assertTrue($provider);
// 		$this->assertTrue(false);
	}

}

