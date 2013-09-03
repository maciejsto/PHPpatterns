<?php 

	require_once dirname(__DIR__).'/config/autoload.php';
	$autoloader=new autoloader();
?>

<?php


class testCustomArrays extends PHPUnit_Framework_TestCase{
	
	private $_dbObject;		//fuxture 
	private $_table;
	private $_className;	//a property which holds string representation of a class 
	private $_mock;
	public function setUp(){
		$this->_dbObject=new dbClass();
// 		$this->_dbObject=new dbNamespace\dbClass();
// 		$this->_dbObject=new dbClassMock(new dbClass());
// 		$this->invokePHPMock();
		
		$this->_className=null;
// 		
		
		
		//including mocks specific to this test
// 		set_include_path(get_include_path().PATH_SEPARATOR.'/mocks');
	}
	public function invokePHPMock(){
		$this->_mock=$this->_dbObject=$this->getMock('dbClass');
				$this->_mock->expects($this->any())
					->method('connect')
					->will($this->returnValue(true));
	}
	public function MockFunctions(){
		$this->_mock->expects($this->any())
					->method('__construct')
					->will($this->returnValue(new dbClass));
		
	}
	
	public function __toString(){
		if(!empty($this->_className)){
			return $this->_className;
		}
	}
	
	//*********************************************************************************
	public function testDBClassExistence(){
		$this->assertTrue(class_exists('dbClass'));
		$this->assertTrue(class_exists('dbClassMock'));
	}
	//*********************************************************************************
	public function testDBClassMethodsExistence(){
// 		$this->assertTrue(method_exists($this->_dbObject, '__construct'));
// 		$this->assertTrue(method_exists($this->_dbObject, '__destruct'));
// 		$this->assertTrue(method_exists($this->_dbObject, 'connect'));
// 		$this->assertTrue(method_exists($this->_dbObject, 'disconnect'));
// 		$this->assertTrue(method_exists($this->_dbObject, '__call'));
// 		$this->assertTrue(method_exists($this->_dbObject, 'createTable'));
// 		$this->assertTrue(method_exists($this->_dbObject, 'checkIfTableExistInDB'));
// 		$this->assertTrue(method_exists($this->_dbObject, 'isValid'));
		
		$reflection=new ReflectionClass('dbClass');
		$methods=$reflection->getMethods();
		
		foreach ($methods as $method){
			$this->assertTrue(is_array($methods));
// 			var_dump($method);
// 			$this->assertTrue();
		}
		

// 		$this->assertTrue(method_exists(new dbClass(), '__callstatic'));
		
		
		
	}
	//*********************************************************************************
	public function testDBClassPropertiesExistence(){
		
		$this->assertClassHasStaticAttribute('_pdo', 'dbClass');
// 		$this->assertClassHasStaticAttribute('_pdo', 'dbClassMock');
		$this->assertClassHasAttribute('_table', 'dbClass');
// 		$this->assertClassHasAttribute('_table', 'dbClassMock');
	}
	//*********************************************************************************
	public function testConstructor(){
		$r=new ReflectionClass('dbClass');
// 		var_dump($r);
		
	}
	public function testDestructor(){
// 		$this->assertTrue(method_exists($this->_dbObject, '__destruct'));
	}
	//*********************************************************************************
	public function testFunctionConnect(){
		$falseArray=array('string','numeric','false','true');
		
		$ret=$this->_dbObject->connect();
		
		$this->assertTrue($ret==true);
		
		foreach ($falseArray as $value){
// 			$this->assertFalse($ret!=$value);
		}
		
		
// 		if($ret==false){
			
// 			$this->assertTrue(dbClass::$_pdo==0);
// 		}
	}
	/**
	 * @testing disconnect function 
	 */
	
	//*********************************************************************************
	public function testDisconnect(){
		
		$falseArray=array('numeric');
		$ret=$this->_dbObject->disconnect();
		
		$this->assertTrue(is_null(dbClass::$_pdo));
// 		$this->assertTrue($ret==true);
		$this->assertFalse(is_numeric($ret));
		$this->assertFalse(is_string($ret));
		
		
	}
	//*********************************************************************************
	
	public function testCall(){
		
		
// 		$this->_dbObject->makeQuery(); //TODO add tests to method testCall 
		
		
	}
	//*********************************************************************************
	public function testCreateTable(){
		try {
			
		
			

		$falseArray=array('numeric','object','null');
		$retArray=array('object','-1','1','0',null);
		$this->_table=$table='table_name5';
		$this->assertTrue(is_string($table));
		
		$ret=$this->_dbObject->createTable($table);
		$this->assertFalse($ret=false);
		//testing aargument type
		foreach($falseArray as $key=>$value){
			$this->assertNotInternalType($value, $table);
// 			$this->assertFalse($ret==$value);
		}
		//testign return value
		foreach($retArray as $key=>$value){
			
// 			$this->assertFalse($ret==$value);
		}
		
		
// 		$this->assertTrue($ret==true);
		
		} catch (Exception $e) {
			$e->getMessage();
			
		}
		
		
	}

	//********************CREATING MOCK OBJECT FOR CLASS DBClass**********************************************
	
	/**
	 * @this function is invoked when isValid function receives array as an parameter
	 */
	public function  testCheckIfTableExistInDB(){
		
		$trueArray=array();
		$falseArray=array();
		$subject=$this->_table;	//table name
		
		$this->_dbObject->createTable($subject);
		$return=$this->_dbObject->checkIfTableExistInDB($subject);
		
// 		$this->assertTrue(method_exists($this->_dbObject, 'checkIfTableExistInDB'));
		$this->assertTrue($return==false);
		$this->assertFalse($return==true);
		
	
		
	}
	
	
	
	
	
}

?>