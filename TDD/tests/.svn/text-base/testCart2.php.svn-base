<?php

require '../config/autoload.php';



	// AutoLoader::registerDirectory('../classes');

class testCart extends  PHPUnit_Framework_TestCase{
	
	private $_cart;
	public function setUp(){
		$autoloader=new autoloader();	//mandatory
		$this->_cart=new Cart();
	}
	
	public function testAddItem2(){
// 		var_dump(Cart::$_entries2);
		$item='book';
		$item1=$this->_cart->addItem2($item, 2);
		$item1->addProperty('prop1', 'val1');
		$this->assertTrue(is_object($item1));
		$item1->addProperty('item1prop', 'propval');
		
// 		var_dump($item1);
		
		$item2=$this->_cart->addItem2('pencil', 1);
		$item3=$this->_cart->addItem2('rubber', 1);
		$this->assertTrue(!empty(Cart::$_entries2));
		
		while(list($key,$value)=each(Cart::$_entries2)){
			$this->assertTrue(is_object(Cart::$_entries2[$key]));
		}
		
		
// 		var_dump(Cart::$_entries2);
		
		
	}
	
	public function testDelItem(){
// 		$this->_cart->delItem('book');
// 		$this->_cart->delItem('pencil');
// 		$this->_cart->delItem('rubber');
		
		while(list($key,$value)=each(Cart::$_entries2)){
			print_r($value);
// 			$this->assertTrue(Cart::$_entries2[]);
		}
		
// 		var_dump(Cart::$_entries2);
	}
	
	public function testErase(){
		$elementToerase=array('book','rubber','pencil');
// 		$this->_cart->erase($elementToerase[0]);
// 		$this->_cart->erase($elementToerase[1]);
// 		$this->_cart->erase($elementToerase[2]);
		
// 		var_dump(Cart::$_entries2);
// 		
		while(list($key,$value)=each(Cart::$_entries2)){
			$key2=0;
			while(list($key2,$el)=each(Cart::$_entries2)){
				if($el=$elementToerase){
					
					$this->assertTrue((Cart::$_entries2[$key]!=$elementToerase));
				}
			}
		}
		
	}
	
	public function testAddProperty(){
		
		$item='div';
		$property='prop1';
		$itm=$this->_cart->addItem2($item, 1);
		$itm->addProperty('id', 'prop1')->addProperty('name', 'sample_name')->addProperty('method', 'post')->addProperty('new_prop', 'new_prop_value');
		$itm->properties="prop1";
		$itm2=$this->_cart->addItem2('form', 1);
		$itm2->addProperty('method', 'post');
		$a=Cart::$_entries2;
		
		$this->_cart->delItem($item);
// 		print_r($a);
		
// 		var_dump($a);
		
	}
	
	public function testObToString(){
		$a=Cart::$_entries2;
		$ob=$a[3];
// 		echo $r=new ReflectionObject($ob);
// 		while(list($key,$value)=each($a)){
			
			$res=$this->_cart->obToString($ob);
// 		}
// 		$this->assertTrue(is_string($this->_cart->_ob));
// 		$this->assertInternalType('string', $this->_cart->_ob);
		
// 		var_dump($res);
	}
	
	public function testEraseAll(){
// 		$res=$this->_cart->eraseAll();
// 		$this->assertTrue(empty(Cart::$_entries2));
// // 		$this->assertTrue($res==true);
	}
	
	public function testAddHTMLelement(){
		$ret=$this->addHTMLelement('div');
	}
	
		
}
?>