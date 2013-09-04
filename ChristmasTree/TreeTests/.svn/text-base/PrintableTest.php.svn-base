<?php
// require_once dirname(__DIR__).'/classes/Printable.php';



class PrintableTest extends PHPUnit_Framework_TestCase{

	//containers, fixtures
	private $_printer;
// 	private $_tree;

	public function setUp(){

// 		$this->_node=new Node(5);
// 		$this->_tree=new MathTree();
		$this->_printer=new Printable();

	}
	
	public function provider(){
		return array(
				array(new Node(1,1)),
				array(new Node(2,2)),
				array(new Node(3,3)),
				);
	}
	/**
	 * @dataProvider	provider
	 */
	public function testPrintln($array_in){
// 		$this->assertTrue(is_array($array_in));
		$this->_printer->println($array_in);
	}
}