<?php



require_once 'PHPUnit/Framework.php';
require_once dirname(__DIR__).'/config/autoload.php';
$autoloader=new autoloader();
?>

<?php


class testDBClassMock extends PHPUnit_Framework_TestCase{
	
	private $_mock;
	private $_reflect;
	
	public function setUp(){
// 		$this->_mock=new dbClass();
// 		$this->_mock=new stdClass();
		$this->_reflect=new ReflectionClass('dbClass');
		
	}
	//***********************************************************************
	public function testClassProperties(){
		$props=$this->_reflect->getDefaultProperties();
		
		foreach ($props as $prop=>$value){
			$rProp=$this->_reflect->getProperty($prop);
			
			
		}
		
		var_dump($this->_mock);
// 		eval();	//accepts string
	}
	//***********************************************************************
	public function testCheckClassFunctions(){
		$classMoethods=get_class_methods('dbClass');
		
		foreach ($classMoethods as $method){
			echo $method."\n";
		}
	}
	
}


?>