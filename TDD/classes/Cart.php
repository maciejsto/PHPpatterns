<?php
// require_once  'C:\xampp\htdocs\TDD\interfaces\cartInterface.php';
define('PATH', realpath(dirname(__DIR__)));
require_once (PATH.'/config/autoload.php');

class Cart implements CartInterface {
	
	public  static   $_entries=array();
	public static  	$_entries2=array();
	
	private $var=array();
	private $bar='baz';
	public $_ptr;
	private $_p;
	public $_ob;
	
	public function __construct(){
		$this->_ob;
		$autoloader=new autoloader();
		$this->_ptr=0;
		$this->_p=4;
	}
	public function __toString(){
		return (string)$this->_ob;
	}

	//====================================================================
	/**
	 * @it adds items to array
	 * @param unknown_type $name
	 * @param unknown_type $val
	 */
	public function addItem($name,$val){

		if(is_numeric($val) && is_string($name)){
			
			if(empty(self::$_entries[$name])){
				self::$_entries[$name]=0;	//i had to initialize the variable first
			}
				return self::$_entries[$name]+=$val;

			
			
		}else
			return false;
		
		
	}
	//====================================================================
	public function addItem2($name,$value){
		if(is_numeric($value) && is_string($name)){
			$auxAr=array('name'=>$name,
						'value'=>$value,
						'properties'=>array());
// 						
// 						'property1'=>'color',
// 						'property2'=>'size',
// 						'property3'=>'quality');
	
			self::$_entries2[]=(object)$auxAr;
			
// 			$this->_ptr=$ob;	//ok
// 			return (object)$this->_ptr;	
// 			return (object)$ob;
			return $this;
// 			return (object)self::$_entries2[]=$auxAr;
		}else
			return false;
	}
	
	//====================================================================
	/**
	 * it views items from array
	 * @param unknown_type $name
	 */
	public function getItem($name){
		if(is_string($name)){
			return self::$_entries[$name]; 	
		}else
			return false;
	}
	//====================================================================
	/**
	 * ts views all elements from array
	 */
	public function getAll(){
		
		return self::$_entries;
	}
	public function getAll2(){
	
		return self::$_entries2;
	}
	//====================================================================
	/**
	 * it delets particular item from the list
	 * @param unknown_type $name
	 */
	public function delItem($name){
		if(is_string($name)){
// 			unset(self::$_entries2);
			foreach (Cart::$_entries2 as $key=>$value){
				foreach ($value as $key2=>$el){
					if($el==$name){
						return self::$_entries2[$key]=(object)array('name'=>$name,'properties'=>array());
					}
				}
			}
// 			return self::$_entries2[$name]=array();
			
		}else{
			return false;
		}
	
	}
	//====================================================================
	
	/**
	 * it delets all elements from array
	 */
	public function delAll(){
		
		foreach (self::$_entries as $key=> $v){
			$res=self::$_entries[$key]=array();
		}
		$this->_ptr=0;
// 		return $res;
	}
	public function delAll2(){
		foreach (self::$_entries2 as $key=>$v){
			self::$_entries2[$key]=array();
			
			
			
		}
		unset($this->_ptr);
		
	}
	//====================================================================
	/**
	 * it check if item exists in 
	 * @param unknown_type $name
	 */
	public function exist($name){
		
			return isset(self::$_entries[$name]);
	}
	//====================================================================
	/**
	 * displays current item
	 */
	public function currentItem(){
		$ar=self::$_entries2;
		
// 		foreach ($ar as $key=>$v){
// 			$this->_ptr=$ar[$key];
		
// 		$this->_ptr=self::$_entries['strawberry'];
// 		return $this->_ptr;
// 		$ar=self::$_entries;
// 		$numKey=array_values($ar);
// 		$keys=array_keys($ar);
// 		$this->_ptr=$numKey[0];
// 		foreach ($ar as $key=>$v){
// 			$ar[$key]=$v;
// 			$this->_ptr=$ar[$key];
// 			$this->_ptr=$key;//.': '.$v;
// 		}
// 		for($i=0;$i<count($ar);$i++){
			
// 			$this->_ptr=$keys[$i];	//previous
			
// 		}
// 		return current($ar);
		if(!empty($ar)){
			$this->_ptr=$ar[$this->_p];
			return (object)$this->_ptr;
		}else{
			throw new Exception('current item does not exist');
		}
		
	}
	//====================================================================
	/**
	 * displays previous item
	 */
	public function previousItem(){
		
		$ar=self::$_entries2;
// 		foreach ($ar as $key=>$v){
// 			$this->_ptr=$ar[$key];
// 		}
// 		$this->_ptr=$ar[$key-1];
		
// 		if(empty($this->_ptr)){
// 			$this->_ptr=0;
// 		}
// 		$ar=self::$_entries;	//assoc array
// 		$numKey=array_values($ar);
// 		$currentkey=key($ar);
// 		foreach($ar as $key=>$v){
// // 			$this->_ptr=$ar[$key];
			
// // 			$this->_ptr=$key;

// 			$this->_ptr=$key.':='.$v;
// 		}
// 		while ($currentkey !=null){
// 			prev($ar);
// 			$currentkey=key($ar);
// 		}
		
// 		$this->_ptr=$ar
		if(!empty($ar) && $this->_p>1){
			$this->_ptr=$ar[$this->_p-1];
			return (object)$this->_ptr;
		}else{
// 			throw new Exception('previous item does not exist');
			return false;
		}
			
	

	}
	//====================================================================
	/**
	 * function returning next Item
	 */
	public function nextItem(){
		$ar=self::$_entries2;
		$c=count($ar);
// 		foreach ($ar as $key => $v) {
// 			if($this->_ptr>$c){
// 				return null;
// 			}
// 			$this->_ptr=$ar[$key];
			
// 		}
// 		$this->_ptr=$ar[$key+1];
		if($this->_p>=$c-1){
// 			$this->_p=$c;
// 			throw new Exception('next item does not exist');
			return false;
			
		}else{
			$this->_ptr=$ar[$this->_p+1];
			return (object)$this->_ptr;
		}
	}
	//====================================================================
	/**
	 * function erasing Items from array
	 */
	public function eraseItem($name){
// 		return self::$_entries[$name]=null;
		$ar=self::$_entries;
		$tempAr=array();
		$numKeys=array_values($ar);
		$keys=array_keys($ar);
// 		if(isset()){
// 			unset($numKeys[$name]);
// 		}
		foreach ($keys as $key=>$v){
			if(isset($keys[$key])==$name){
				
// 				unset($keys[$key]);
				$keys[$key]==null;
			}
			
		}
		return $ar;
	}
	//====================================================================
	
	/**
	 * function is empty
	 */
	public function isEmpty($a){
		if(!empty($a) && !is_null($a)){
			return true;
		}else{
			return false;
		}
	}
	//====================================================================
	public function erase($element){
		
		if(!is_null($element)){
			foreach (Cart::$_entries2 as $key=>$value){
				foreach ($value as $key2=>$el){
					if($el==$element){
						unset(Cart::$_entries2[$key]);
// 						Cart::$_entries2[$key]=null;
					}
				}
				
			}
// 			unset(Cart::$_entries2[$element]);
// 			unset($a['cherry']);
// 			$a=null;
		
			return true;
		}else{
			return false;
		}
	}
	public function eraseAll(){
		
		$a=Cart::$_entries2;
		if(!empty($a)){
			foreach ($a as $key=>$v){
				$a=array();
			}
		}
		return true;
		
	}
// 	public function sxml($param){
		
// 	}
// 	public function addHTMLItem($name){
		
// 	}

	public function addProperty($name,$value){
// 		$tempar=array('name'=>$name,'value'=>$value);
		
		$a=Cart::$_entries2;
// 		$ob=$a[3];
// 		foreach ($a as $key=>$ob){
// 			$ob->properties[]=array('name'=>$name,'value'=>$value);
// 		}
		while(list($key,$ob)=each($a)){
			$ob->properties[]=array('name'=>$name,'value'=>$value);
		}
// 		$ob->properties[]='prop1';
// 		$ob->properties[]='prop2';
// 		$ob->properties[]='prop3';
// 		$ob->properties[]='prop4';
		
		
// 		$a[]=$tempar;
// 		array_push($a, $tempar);
		
		return $this;
	}
	public function obToString($ob){
// 		$s=serialize($ob);
		$s=$this->_ob=$ob;
		return $s;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}


?>