<?php



require_once dirname(__DIR__).'/config/autoload.php';
$autoloader=new autoloader();
?>

<?php


class dbClassMock{
	
	private $_RealObject;
	private $_Config;
	
	public function __construct($realObject){
		$this->_RealObject=$realObject;
// 		$this->_Config=$config;
	}
	
	
	public function __call($methodName,$arguments){
		
		$method_detail=array($this->_RealObject,$methodName);
		
		
		if(method_exists($this->_RealObject, $methodName) && $this->_RealObject instanceof dbClass) {
			
			call_user_func_array($method_detail,$arguments);
// 			return call_user_func_array(array($method_detail, $methodName), $arguments);
			if($methodName==='connect'){
				return $this->DoNothing();
			}
			
			if($methodName==='__destruct'){
				return $this->DoNothing();
			}
		}

	}
	
	public function DoNothing(){
	
		echo 'this is a mock , so its fake and do nothing ,sorry'."\n";
		return true;
	}
}


//************************************************************************






?>