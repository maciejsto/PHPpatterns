<?php
// define('__ROOT__', dirname(dirname(__FILE__)));
// require_once(__ROOT__.'\Card.php');
require 'C:\Documents and Settings\ja\workspace\Arduino\TDD\classes\Card.php';


class testCard extends PHPUnit_Framework_TestCase{

	private  $_card;


	public function setUp(){
		$this->_card=new Card();
	}
	/**
	 * tests if objects posses a given field
	 */
	public function testIsCardObject(){
		$this->assertClassHasAttribute('_param', 'Card');
	}
	/**
	 * tests if object is not empty and if it is of type object
	 */
	public function testEmpty(){
		$this->assertTrue(!empty($this->_card));
		$this->assertNotEmpty($this->_card);	//does the same what above
		$this->assertTrue(is_object($this->_card));

		$this->assertInstanceOf('Card', $this->_card);
		$this->assertType('Card', $this->_card);


	}
	/**
	 * test for adding items to basket
	 */
	public function testAddItem(){
		// 		$res=$this->_card->addItem('orange', 1);
		$res1=$this->_card->addItem('apple', 2);
		$res2=$this->_card->addItem('strawberry', 3);
		$res3=$this->_card->addItem('banana', 4);
		// 		$this->assertTrue(is_numeric($res));
		$this->assertTrue(is_numeric($res1));
		$this->assertTrue(is_numeric($res2));
		$this->assertTrue(is_numeric($res3));

		// 		$this->assertType('bool', $res);
		// 		$this->assertEquals(1, $res);
	}
	/**
	 * test for getting item from basket
	 */
	public function testGetItem(){
		// 		$res=$this->_card->getItem('orange');
		// 		$this->assertTrue($res>0);
	}

	/**
	 * test for deleting particular item
	 */
	public function testDelItem(){
		// 		$res=$this->_card->delItem('orange');
		// 		$res2=$this->_card->delItem('apple');
		// 		$res3=$this->_card->delItem('banana');
		// 		$res4=$this->_card->delItem('strawberry');
		// 		$this->assertTrue(is_null($res));
		// 		$this->assertTrue(is_null($res2));
		// 		$this->assertTrue(is_null($res3));
		// 		$this->assertTrue(is_null($res4));

	}
	/**
	 * test for getting all items
	 */
	public function testGetAll(){
		// 		$this->_card->addItem('apple', 1);
		// 		$this->_card->addItem('strawberry', 2);
		// 		$this->_card->addItem('banana', 4);


		$entries=$this->_card->getAll();
		// 		$singleEntry=$this->_card->getItem('apple');

		$count_is_greater_than_zero=(count($entries)>0);
		$this->assertTrue($count_is_greater_than_zero);
		$this->assertType('array', $entries);

		foreach ($entries as $key=> $entry){
			echo $entry;
			// 			$this->assertTrue(is_array($entry));
				
			// 			$this->assertType('array', $entry);
			// 			$this->assertTrue(isset($entry['name']));
			// 			$this->assertTrue(isset($entry['value']));
			// 			foreach ($entry as $item){

			// 				echo $item;
			// 			}
		}

	}
	/**
	 * test for deleting all entries
	 */
	public function testDelAll(){
		// 		$this->_card->delAll();
		// 		$entries=$this->_card->getAll();

		// 		$this->assertEquals($entries, array());
		// 		$this->assertEmpty($entries);
	}


	/**
	 * test if item exist in  array
	 */
	public function testExist(){
		// 		$result=$this->_card->addItem('orange', 1);
		$res=$this->_card->exist('orange');
		$this->assertTrue(!is_null($res));
		$this->assertType('string', $res);
		$this->assertTrue(!is_null($res));
		$this->assertTrue(!empty($res));
		$this->assertTrue(is_string($res));
	}
}

?>