<?php 

	require_once dirname(__DIR__).'/config/autoload.php';
	$autoloader=new autoloader();
?>

<?php


class testSqlModel extends PHPUnit_Framework_TestCase{
	
	private $_fixture;
	
	public function setUp(){
		$this->_fixture=new SqlModel();
	} 
	
	public function testSqlModelExist(){
		$this->assertTrue(class_exists('SqlModel'));
	}
	
	public function testFunctionExistInSqlModelClass(){
		$this->assertTrue(method_exists($this->_fixture, 'checkIfTableExistInDB'));
	}
	
	public function testCheckIfTableExistInDB(){
		
		$this->assertTrue();
		
	}
	
	
}