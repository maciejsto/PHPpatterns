<?php 
	include_once 'bootstrap/bootstrap.php';
	require_once dirname(__DIR__).'/config/autoload.php';

	$autoloader=new autoloader();
?>


<?php

// require_once 'config/autoload.php';


class testInheretance extends  PHPUnit_Framework_TestCase{
	
	
	//**************************************************************************************************************
	/**
	 * properties
	 * @var unknown_type
	 */
	private $_instance;
	private $_instance2;
	private $_classContainer;	//holds classes from which a child class will "inheret"
	private $_parentClassContainer=array(null);
	private $_tmp;
	
	//****************************************************************************************************************
	/**
	 * setup function (initializes objects of base classes. etc )
	 * (non-PHPdoc)
	 * @see PHPUnit_Framework_TestCase::setUp()
	 */
	public function setUp(){
		
		
		$obA=new classA();
		
		$this->_classContainer=array('classA','classB','classA','classA');
		foreach ($this->_classContainer as $v){
			if(!class_exists($v)){
				
				$this->_instance2=new multiInheretance($this->_classContainer);
			}
		}
		foreach($this->_classContainer as $key=>$val){
			
				$this->_parentClassContainer[]=new $val; 
			}
		
		

	}//end of setup
	
	//***************************************************************************************************************
	/**
	 * test for class A (the base class from which class MultiInheretance :inherets)
	 */
	public function testClassA(){
		$ob=new classA();
		classA::$_staticPropertyA;

		
		
// 		echo $ro=new ReflectionObject($ob);
	}
	//***************************************************************************************************************
	/**
	 * test for MultiInheretance class
	 */
	public function testClassMultiInheretance(){
		
		
		$ob=new classA();
		
// 		$property="_publicPropertyA";
		$property="_size";
// 		$property=$ob->_publicPropertyA='ala';
// 		
// 		$property=$ob->_publicPropertyA='10';
// 		$property=$this->_parentClassContainer[0]->_publicPropertyA;
// 		
// 		$property=$ob->_publicPropertyA;
		
		
// 		$this->assertTrue(method_exists($this->_parentClassContainer[0], '__construct'));	//check if  each of the class has __constructor()
// 		$this->assertTrue(method_exists($this->_parentClassContainer[1], '__construct'));
		
		if(property_exists(new multiInheretance($this->_classContainer), $property)){
			$rc=new ReflectionClass(new multiInheretance($this->_classContainer));
				$p=$rc->getProperties(ReflectionProperty::IS_PUBLIC);
				foreach ($p as $prop){
					
					if($prop->getName()==$property){
						var_dump($prop->getValue(new multiInheretance($this->_classContainer)));
						return $prop->getValue(new multiInheretance($this->_classContainer));
					}
				}
			
		}
// 		var_dump($this->_parentClassContainer);
		//test for the first element of container which is classA*********
		if(property_exists($this->_parentClassContainer[0], $property)){
				
					$rc=new ReflectionClass($this->_parentClassContainer[0]);
					$p=$rc->getProperties( ReflectionProperty::IS_PUBLIC);
// 					ReflectionProperty::IS_PRIVATE | ReflectionProperty::IS_PROTECTED |
// 					var_dump($p);
					foreach ($p as $k=>$prop){
// 						var_dump($prop);
						if($prop->getName()==$property){
							echo 'wchodze do if'."\n";
// 							var_dump($prop);
							$temp=array();
							//$temp['ob']=$prop;
							//$temp['name']=$prop->getName();
// 							$temp['value']=$prop->setValue($prop,'valA');
							$temp['value']=$prop->getValue(new multiInheretance(array('classA')));
// 							var_dump($temp);
							//$temp['value']=$prop->getValue($prop);
							//die($prop->getValue($prop->getName()));
// 							var_dump($temp['value']);
	// 						$temp['name']=$prop->getName();
	// 						return $prop->getValue($this);
						 	//$this->assertEquals(KMIKl, $prop->getValue($prop));
						 	$this->assertTrue('valA'==$prop->getValue(new classA()));
						 	
						 	var_dump($temp);
							return (object)$temp;
// 							return $temp; 
						}
						
					}
		//test for the first element of container which is classB*********
				}elseif(property_exists($this->_parentClassContainer[1], $property)){
					$rc=new ReflectionClass($this->_parentClassContainer[1]);
					$p=$rc->getProperties(ReflectionProperty::IS_PRIVATE | ReflectionProperty::IS_PROTECTED | ReflectionProperty::IS_PUBLIC);
					
					foreach ($p as $k=>$prop){
						if($prop->getName()==$property){
							$temp=array();
							$temp['ob']=$prop;
							$temp['value']=$prop->getValue(new classB());
	// 						$temp['name']=$prop->getName();
	// 						return $prop->getValue($this);
							return $temp; 
						}
					}
				}//end of if
			
				
		
		
	}//end testClassMultiInheretance
	//***************************************************************************************************************

		
	
	
	
}

?>