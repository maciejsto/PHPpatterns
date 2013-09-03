<?php include '../config/autoload.php'?>

<?php

class testAutoload extends  PHPUnit_Framework_TestCase{

	private $_bootstrap;
	private $_autoloader;
	
	public function setUp(){
			$this->_bootstrap=new bootstrap();
			$this->_autoloader=new autoloader();
	}
	
	//============================================================
	public function testAutoload(){
		$this->assertTrue(class_exists('autoloader'));
		$this->assertTrue(function_exists('__autoload'));
		
	}
	//============================================================
	public function testBootstrap(){
		
		$this->_bootstrap->app_root();
		$this->assertTrue(isset(bootstrap::$_app_root));
		$this->assertTrue(!is_null(bootstrap::$_app_root));
		$this->assertEquals('C:/xampp/htdocs/TDD/tests/', bootstrap::$_app_root);
		echo bootstrap::$_app_root."\n";
// 		echo $v=str_replace('\\', '/', getcwd().DIRECTORY_SEPARATOR)."\n";
// 		define('ROOT', $v);
// 		echo ROOT;
// 		echo dirname(__DIR__);
	}
	
}
?>
