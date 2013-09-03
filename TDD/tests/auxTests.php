<?php

require 'C:\xampp\htdocs\TDD\classes\Cart.php';

class testCart extends  PHPUnit_Framework_TestCase{

	/**
	 * @ficture
	 * @var unknown_type
	 */
	private $_cart;
	private $_ar;
	private $_testAr;
	private $_entries;

	/**
	 *
	 * this is invoked before every test
	 * @see PHPUnit_Framework_TestCase::setUp()
	 */
	//===================================================================
	public function setUp(){
	
		$this->_cart=new Cart();
		$this->_ar=array(1,0,-1);
		$this->_testAr=array(true,false,'string','numeric',null);
	
	}
	//===================================================================
	public function testAddItem2(){
	
	
		$res=$this->_cart->addItem2('BREAD',2);
		$res->property1="bla bla bla";
		$this->_cart->addItem2('orange',1);
		$this->_cart->addItem2('banana',2);
		$item=$this->_cart->addItem2('strawberry',5);
		$item=$this->_cart->addItem2('cherry',5);
		$this->_cart->addItem2('blackcherry',5);
		var_dump($this->_cart->getAll2());
		var_dump($res);
		$res->property1="bla bla bla";
		
		foreach ($this->_testAr as $key=>$v){
			$ptr[$key]=$v;
			$this->assertNotEquals($ptr[$key], $res);
			
			// 			$this->assertEquals('object', $res);
		}
		$this->assertTrue(is_object($res));
		
	
		echo $res->name."\n";
		echo $res->value."\n";
		// 		$n=$res->name;
		// 		$this->assertTrue(is_string($n));
		// 		echo $res->name="new name for BREAD";
		

	}
	//===================================================================
	public function testCurrentItem(){

		$res=$this->_cart->currentItem();
	// 	$this->assertTrue(!is_null($res));
		$this->assertTrue(is_object($res));
	
	// 	var_dump($this->_cart->getAll2());
		echo 'current Item:======'.$res->name."==========\n\n\n";
	// 	var_dump($res);
	}
	//===================================================================
	/**
	 * tests previous element
	 */
	public function testPreviousItem(){
	

		$entries=$this->_cart->getAll2();
		$this->_entries=$entries;

		$res2=$this->_cart->previousItem();
		$count=count($entries);
		foreach ($entries as $key=>$v){
			if($key==0 && $count==1){
				$this->assertTrue($res2==false);
			}
		}
	// 	var_dump($this->_cart->getAll2());
	// 	echo  'current Item:====='.$res->name."==============\n\n\n";
	// 	var_dump($res);
		if(!empty($res2)){
			echo 'previous Item:====='.$res2->name."============\n\n\n";
		}else{
			var_dump($res2);
			echo "\n\n";
// 			echo 'previous item:= '.$res2."\n\n\n";
		}
		// 	echo 'next Item:======'.$res3->name."==========\n\n\n";
	// 	var_dump($res=$this->_cart->previousItem());
	
	
	}
	//==========================================================
	/**
	 * tests next Item
	 */
	public function testNextItem(){
		
		$res=$this->_cart->nextItem();
		
	// 	var_dump($res);
	// 	$this->assertTrue(!is_null($res));
	// 	$count=count($this->_entries);
		$entries=$this->_cart->getAll2();
		$count=count($entries);
		foreach ($entries as $key=>$v){
			if($key==$count){
	// 			$this->assertTrue();
			}
		}
	if(!empty($res)){
			echo 'next item:====='.$res->name."============\n\n\n";
		}else{
			var_dump($res);
			echo "\n\n";
// 			echo 'next item:= false'."\n";
		}
	
		
	}
	//===================================================================
	
	
	
}
?>