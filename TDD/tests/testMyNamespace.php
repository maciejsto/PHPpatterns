// <?php 
// 	use foo as bar;	//just giving a namespace an alias
// ?>
<?php 

	require_once dirname(__DIR__).'/config/autoload.php';
	$autoloader=new autoloader();
?>

<?php


class testMyNamespace extends PHPUnit_Framework_TestCase{
		
	private $_ob;
	
	public function setUp(){
		$this->_ob=new MyNamespace();
		
// 		$this->_ob=new foo\MyNamespace();	//we can use both namespaces foo or bar		
// 		$this->_ob=new foo\MyNamespace();
	}
	
	
	public function testMyNamespace(){
		$this->assertFileExists(realpath('../MyNamespace.php'));
		
		
	}
	
	public function testIfFunctionExist(){
		$this->assertTrue(method_exists($this->_ob, 'bar'));
	}
	
	
	

}

?>