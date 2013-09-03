<?php 
// 	include_once '../bootstrap/bootstrap.php';
	include_once dirname(__DIR__).'/bootstrap/bootstrap.php';
	$root=bootstrap::app_root();
// 	require_once '../config/autoload.php';
	require_once dirname(__DIR__).'/config/autoload.php';
	$autoloader=new autoloader();
?>

<?php


// require_once '../config/autoload.php';


class multiInheretance {
	
	//properties========================================================================
	protected $_container=array();	//holds instances of classes
	public $_temp;					//temporary field
	public $_size;					//holds size of container
	protected $_instances;			//holds names of instantiniated classes
	public $_tmp;
	
	//constructor==========================================================================
	public function __construct($classNames){
// 		$this->_temp=10;
// 		$this->_size=0;
		
		
		for($i=0;$i<$this->_size;$i++){
			
			$this->_container[]=new $classNames[$i];	//fill container with objects (instances of classes)
			$this->_instances[]=$classNames[$i];		//fill container with classes names
		}
		echo '</br>number of class elements: '.$this->_size=count($classNames)."\n";
// 		$this->_container[]=new classA;
// 		$this->_container[]=new classB;
// 		$this->_container[]=new classD;

	}
// 	public function __set($property,$value){
		
// 		if(property_exists(new classA(), $property)){
// 			$rc=new ReflectionClass(new classA());
// 			var_dump($rc->getDefaultProperties());
// 			$p=$rc->getProperties(ReflectionProperty::IS_PUBLIC);
// // 			var_dump($p);
// 			foreach ($p as $k=>$v){
// 				if($v->getName()==$property){
// 					$ob=new classA();
// 					$v->setAccessible(true);
// // 					var_dump($v);
// // 					var_dump($v->setValue($ob,'sdsasds'));
// // 					$ret=$v->setValue($v,$value);
// // 					var_dump($property=$value);
// // 					var_dump($v=$value);
// 					return $v->setValue($v, $value);
// 				}
// 			}
// 		}
// 	}
	public function __get($property){
		
		if(property_exists($this, $property)){		//check if propperty of current class exist
			$rc=new ReflectionClass($this);			//make reflectionClass of current class 
			
				$p=$rc->getProperties(ReflectionProperty::IS_PRIVATE | ReflectionProperty::IS_PROTECTED | ReflectionProperty::IS_PUBLIC);

				var_dump($p);
				foreach ($p as $k=>$prop){
					if($prop->getName()===$property){	//if property name matches the one from reflection class object ($p) the return it
						
						return $prop->getValue($this); 
					}
				}

		}else {
// 			foreach ($this->_container as $key=>$value){
// 				if(property_exists($this->_container[$key], $property)){
// 					$rc=new ReflectionClass($this->_container[$key]);
// // 					$temp=array('_propertyArray','_publicPropertyB');
// 						$this->_tmp=$rc->getProperties(ReflectionProperty::IS_PRIVATE | ReflectionProperty::IS_PROTECTED | ReflectionProperty::IS_PUBLIC);
// 						foreach ($this->_tmp as $k=> $pval){
// 							// 						return $this->_tmp;
// 							// 						return $pval->getValue($pval)."\n";
// // 							return $this->_tmp;
								
// 						}
						
// 						return $property;
// 				}
				
// 			}
			
			if(property_exists(new classA(), $property)){
				$rc=new ReflectionClass(new classA());
				$p=$rc->getProperties(ReflectionProperty::IS_PRIVATE | ReflectionProperty::IS_PROTECTED | ReflectionProperty::IS_PUBLIC);
				
				foreach ($p as $k=>$prop){
					if($prop->name===$property){
						$temp=array();
						$temp['ob']=$prop;
						
						$temp['value']=$prop->getValue(new classA());
// 						$temp['name']=$prop->getName();
// 						return $prop->getValue($this);
// 						return (object)$temp['value']; 
						if(!isset($temp['value'])){
// 							$ret='property '.$prop->getName().' not yet initialized';
// 							return $ret;
// 							// 					return $temp['value'];
						}else{
							return $temp['value'];
						}
					}
					
				}
				
			}elseif(property_exists(new classB(), $property)){
				$rc=new ReflectionClass(new classB());
				$p=$rc->getProperties(ReflectionProperty::IS_PRIVATE | ReflectionProperty::IS_PROTECTED | ReflectionProperty::IS_PUBLIC);
				
				foreach ($p as $k=>$prop){
					if($prop->name===$property){
						$temp=array();
						$temp['ob']=$prop;
						$temp['value']=$prop->getValue(new classB());
// 						$temp['name']=$prop->getName();
// 						return $prop->getValue($this);
						
					}
				}
				if(!isset($temp['value'])){
					return $temp['value'];
				}else{
					return $temp['value'];
				}
			}
// 			return $p;
		}
	}//end of __get
	
	
	//functions==============================================================================
	function __call($function,$arguments){
		try {

			//done by foreach loop***************************************************
			
			foreach($this->_container as $key=>$value){
				
				if(method_exists($this->_container[$key], $function)){
// 					echo 'you called function '.$function.' from class '.$this->_temp.'<br/>';
					return call_user_func_array(array($this->_container[$key],$function), $arguments);
				}
				
				
// 				else{
// 					throw new Exception('function : '.$function.' does not exist<br/>'); //TODO catch exceptions
// 				}
			
			
			}
			
			
			
			//done by for loop*********************************************************
			
// 			$size=count($this->_container);
			
// 			for($key=0;$key<$size;$key++){
				
// 				if(method_exists($this->_container[$key], $function) ){
// 					return call_user_func_array(array($this->_container[$key],$function), $arguments);
// 				}else{
				
// // 					throw new Exception('function : '.$function.' does not exist<br/>');
// 				}
// 			}

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	//===============================
	
}

?>