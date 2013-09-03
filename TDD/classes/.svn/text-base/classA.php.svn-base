<?php



class classA {
	
	//static properties
	public static  $_staticPropertyA;
// 	properties
	public $_publicPropertyA;
	public $_protectedPropertyA;
	private $_privatePropertyA;

	public $_propertyArray;
	
	
	//***********************************************
	public  function __construct(){
		
		$this->_publicPropertyA='valA';
// 		$this->_propertyArray=array($this->_publicPropertyA);
		self::$_staticPropertyA='value of property from class AA';
		
	}
	//***********************************************
	public function __set($property,$value){
// 		return $this->_propertyArray[$property]=$value;
		return $this->_publicPropertyA=$value;
	}
	//***********************************************
	
	
	
	/**
	 * 
	 * @param unknown_type $property
	 * if a function returns a reference there is no need to use return keyword
	 */
	public function __get($property){
// 		 return $this->_propertyArray[$property];
		return $this->_publicPropertyA;
	}
	//***********************************************
	public function function1A(){
		echo 'calling '.__METHOD__.'</br>';
	}
	//***********************************************
	public function function2A(){
			echo 'calling '.__METHOD__.'</br>';
	}
}

?>