<?php

require '../config/autoload.php';



// AutoLoader::registerDirectory('../classes');

class testCart extends  PHPUnit_Framework_TestCase{

	/**
	 * @ficture
	 * @var unknown_type
	 */
	private $_cart;
	private $_ar;
	private $_testAr;

	/**
	 *
	 * this is invoked before every test
	 * @see PHPUnit_Framework_TestCase::setUp()
	 */
	
	public function setUp(){
		$autoloader=new autoloader();
		$this->_cart=new Cart();
		$v=new Card();
		$this->_ar=array(1,0,-1); 	 
		$ob=new stdClass();
		$this->_testAr=array(true,false,'string','numeric',null,$ob);
		//	TODO make two array : one for true asserts and one for false

	}
	//================================================================
	
	
	
	/**
	 * test for existence of class fields
	 */
	public function testIfFieldExist(){
// 		$this->assertAttributeEquals(array(), '_entries', new Cart);	//makes error
		$this->assertAttributeEquals(array(), 'var', new Cart);			//ok
	}
	//===========================================================
	/**
	 * test function for adding items
	 */
	public function testAddItem2(){
		
		
		$res=$this->_cart->addItem2('BREAD',2);
		$this->_cart->addItem2('orange',2);
// 		$this->assertTrue(!is_null($res));
		foreach ($this->_testAr as $key=>$v){
			$ptr[$key]=$v;
			$this->assertNotEquals($ptr[$key], $res);
// 			$this->assertEquals('object', $res);
		}
		foreach ($this->_ar as $key=>$v){
			$ptr[$key]=$v;
			$this->assertNotEquals($ptr[$key], $res);
		}
// 		$this->assertTrue(is_object($res));
		var_dump($res);
		
		echo $res->name."\n";
		echo $res->value."\n";
// 		$n=$res->name;
// 		$this->assertTrue(is_string($n));
// 		echo $res->name="new name for BREAD";
	
	}
	//TODO
// 	public function testAddHTMLItem($name){
		
// 	}
	//TODO
// 	public function testAddElementAttr($attr,$val){
		
// 	}
	//====================================================================
	/**
	 * tests for object properties
	 */
	public function testAddItem2_Prop(){
		
		$ob=$this->_cart->addItem2('car',1);
		$ob1=$this->_cart->addItem2('car2',1);
// 		var_dump($ob);
		$entries=$this->_cart->getAll2();
		var_dump($entries);
		$brand=$ob->name;
		echo $this->assertTrue(is_string($brand));
		
	
	}
	
	//====================================================================
	/**
	 * another function which tests addition items to array
	 */
	public function testAddItem(){
		$a=array();
		$var=0;
		$v1=$this->_cart->addItem('orange',2);
		$v2=$this->_cart->addItem('orange',1);
		$v3=$this->_cart->addItem('apple',3);
		$this->_cart->addItem('banana',4);
		
		$this->assertFalse(is_array($v1));
		$this->assertType('numeric', $v1);
		
		
		$this->assertFalse($this->_cart->addItem($a,5));
		$this->assertFalse($this->_cart->addItem($var,8));
		
// 		$this->assertEquals($a, $this->_cart->addItem($a,10));

// 		$this->assertEquals(8, $this->_cart->addItem('plum',8));

		var_dump($entries=$this->_cart->getAll());
		printf("%s\n",$v1);
		printf("%s\n",$v2);
		printf("%s\n",$v1+$v2);
		
		$this->assertTrue(!is_null($entries));
		$count_entries=(count($entries)>0);
		$this->assertTrue($count_entries>0);

		foreach ($entries as $key=> $entry){

			$this->assertType('array', $entries);
// 			$this->assertTrue(is_numeric($entry));

// 			$this->assertTrue(isset($entry['orange']));
// 			$this->assertTrue(isset($entry['value']));
		}
		
// 		$this->assertTrue($res>0);
// 		$this->assertType('numeric',$res);

	}
	//====================================================================
	public function testGetItem(){

		$this->_cart->addItem2('orange',9);
		$res=$this->_cart->getItem('orange');	//returns 9
// 		$this->assertEquals(9, $res);
		$this->assertTrue(is_numeric($res));
		$this->assertTrue(!is_null($res));

	}
	//====================================================================
	public function testDelItem(){

		$ob=new stdClass();
		$localAr=array(null,$ob,-1,1,true);

		
		$this->_cart->addItem('orange',2);
		var_dump($this->_cart->getAll());	
		
		$res=$this->_cart->delItem('cherry');	//deletign Item form array
	
		foreach ($localAr as $key=>$v){
			$ptr[$key]=$v;
			$this->assertFalse($this->_cart->delItem($ptr[$key]));
		}
		
		
		$this->assertTrue(empty($res));
		$orange_exist=$this->_cart->exist('orange');
		$this->assertFalse(!$orange_exist==true);
		
		foreach ($this->_testAr as $key=>$v){
			$ptr[$key]=$v;
// 			$this->assertNotEquals($ptr[$key], $res);
		}
		$this->assertTrue(is_null(Cart::$_entries2['cherry']));
		var_dump(Cart::$_entries2['cherry']);
		
		
	}

	//====================================================================
	public function testGetAll(){
		$res=$this->_cart->getAll();
		$this->assertTrue(is_array($res));
		$this->assertTrue(isset($res));


	}
	//====================================================================
	/**
	 * tests if entry exist in array
	 */
	public function testExist(){

		$this->_cart->addItem('strawberry',10);
		$res=$this->_cart->exist('strawberry');

		$this->assertEquals(true, $res);
		$this->assertFalse(is_array($res));
		$this->assertTrue($res==true);
		$this->assertTrue(is_bool($res));
		$this->assertType('bool', $res);

		var_dump($this->_cart->getAll());	
	}
	//===================================================================
	public function testDelAll(){
		
		$res=$this->_cart->delAll();
		$this->assertTrue(empty($res));
// 		$this->assertTrue(is_array($res));
// 		$this->assertType('array', $res);
		
		$val1=$this->_cart->getItem('orange');
		$val2=$this->_cart->getItem('apple');
		$val3=$this->_cart->getItem('strawberry');
		$this->assertTrue(empty($val1));
		$this->assertTrue(empty($val2));
		$this->assertTrue(empty($val3));
		
		var_dump($this->_cart->getAll());
	}
	public function testDelAll2(){
		$var=$this->_cart->_ptr;
		var_dump($var);
		$res=$this->_cart->delAll2();
		
		$this->assertTrue(empty($var));
		var_dump($var);
	}
	
	//===================================================================
	/**
	 * test the current element
	 */
	public function testCurrentItem(){
// 		$this->_cart->addItem('orange',1);
// 		$this->_cart->addItem('banana',2);
// 		$this->_cart->addItem('strawberry',5);
		$this->_cart->addItem2('orange',1);
		$this->_cart->addItem2('banana',2);
		$item=$this->_cart->addItem2('strawberry',5);
		
		$res=$this->_cart->currentItem();
		$this->assertTrue(!is_null($res));
		
		
		var_dump($this->_cart->getAll2());
		
		var_dump($this->_cart->currentItem());
	}
	//===================================================================
	/**
	 * tests previous element
	 */
	public function testPreviousItem(){
		
// 		$this->_cart->addItem('orange',1);
// 		$this->_cart->addItem('banana',2);
// 		$this->_cart->addItem('strawberry',3);
// 		$this->_cart->addItem('apple',4);
		$item=$this->_cart->addItem2('cherry',5);
		$entries=$this->_cart->getAll2();
		var_dump($entries);
		$res=$this->_cart->previousItem();
// 		echo $currentkey=key($entries);
		$this->assertTrue(!is_null($res));
		$this->assertEquals('cherry', $item->name);
		foreach ($entries as $key=>$v){
			echo $key."\n";
		}
		var_dump($res=$this->_cart->previousItem());
		
		
	}
	//==========================================================
	/**
	 * tests next Item
	 */
	public function testNextItem(){
		$res=$this->_cart->nextItem();
		var_dump($res);
// 		$this->assertTrue(!is_null($res));
		
		
	}
	//==========================================================
	public function testEraseItem(){
// 		$this->_cart->eraseItem('apple');
// 		$this->_cart->eraseItem('strawberry');
		
// 		$res=$this->_cart->exist('apple');
// // 		$this->assertFalse($res==true);		//apple still exist
		
		
		
		
// 		var_dump($all=$this->_cart->getAll());
// 		$numKeys=array_values($all);
// // 		echo $numKeys[3]."\n";
		
	
// 		$entries=$all;
// 		$count_entries=count($entries>0);
// 		foreach ($entries as $key=>$v){
// 			if($key=='apple'){
// // 				$this->assertFalse($key=='apple');
// 			}
// 			print_r( $key.': '.$v."\n");
// 		}
// 		var_dump($res=$this->_cart->currentItem());
// 		print_r($keys=array_keys($entries));	
// 		print_r($keys[0]);
	}
	//==========================================================
	/**
	 * test isEmpty
	 */
	public function testIsEmpty(){
		
		$arTrue=array(true);
		$arFalse=array(false);
		$var=Cart::$_entries2;
		$res=$this->_cart->isEmpty($var);
// 		$var=array();
// 		foreach ($arType as $key=>$value){
			$this->assertInternalType('array', $var);
// 		}
		
		
		$this->assertTrue(!is_null($var));

		while(list($key,$value)=each($arTrue)){
			$ptr=$arTrue[$key];
			$this->assertTrue($res==$ptr);	
		}
	}//end testisEmpty
	
	public function testErase(){
		$arTrue=array(1=>'numeric');
		$arFalse=array(1=>'string','bool','null');
		var_dump($arTrue);
		$param=$this->_cart->_ptr;
		foreach ($arTrue as $key=>$value){
			
			$this->assertInternalType($value, $param);	//FIXME

		}
		foreach($arFalse as $key=>$value){
			$this->assertNotInternalType($value, $param);
		}
		
		$res=$this->_cart->erase($param);
		var_dump($param);
		
		$this->assertTrue($res==true);
		
	}

// 	public function testSxml(){
// 		$ret=$this->_cart->sxml('div');
// // 		$this->assertTrue()
// 	}
}
?>

<!-- C:\WinAVR-20100110\bin;C:\WinAVR-20100110\utils\bin; -->
<!-- G:\Applications\Oracle\OraInst\v6\9i\bin;%SystemRoot%\system32;%SystemRoot%;%SystemRoot%\System32\Wbem;%SYSTEMROOT%\System32\WindowsPowerShell\v1.0\;C:\Program Files\TortoiseSVN\bin;G:\Applications\Oracle\OraInst\v6\10g\bin;G:\Applic~1\Oracle\OraInst\v6\10g\jre\1.4.2\bin\client;G:\Applications\Oracle\OraInst\v6\Dev6i\bin;G:\Applic~1\Oracle\OraInst\v6\10g\jre\1.4.2\bin;G:\Applic~1\Oracle\OraInst\v6\9i\jre\1.4.2\bin\client;G:\Applic~1\Oracle\OraInst\v6\9i\jre\1.4.2\bin;G:\Applic~1\Oracle\OraInst\v6\Dev6i\jdk\bin;G:\Applic~1\Oracle\OraInst\v6\DS10g\jre\1.1.8\bin;G:\Applic~1\Oracle\OraInst\v6\DS10g\jlib;G:\Applic~1\Oracle\OraInst\v6\DS10g\jdk\jre\bin\client;G:\Applic~1\Oracle\OraInst\v6\DS10g\jdk\jre\bin;G:\Applic~1\Oracle\OraInst\v6\DS10g\jdk\jre\bin\classic;G:\Applic~1\Oracle\OraInst\v6\DS10g\jre\1.4.1\bin;G:\Applications\Oracle\OraInst\v6\DS10g\bin; -->
<!-- G:\Applic~1\Oracle\OraInst\v6\jre\1.1.8\bin -->