<?php

// require dirname(__DIR__).'/interfaces/MathOperationInterface.php';
// require_once dirname(__DIR__).'/classes/TreeElement.php';

class Operation extends TreeElement{
	
	
	//properties
	
// 	private $_id;
// 	private $_children=array();
// 	private $_parent;
// 	private $_value;
	private $_operationResult=0;
	private $_operationType;
	
	//=========================================================CONSTRUCTOR
	public function __construct($operationType=null,$id=null){
		
		$this->setOperationType($operationType);
// 		$this->setResultOperation();
// 		$this->setValue($this->getOperationResult());
		
		$this->setId($id);
// 		$this->_operationResult=null;
// 		if(!isset($value)){
// 			throw new Exception('A value is required to create a node');
// 		}
	}
	//=========================================================DESTRUCTOR
	public function __destruct(){
		unset($this->_parent,$this->_children,$this->_value,$this->_id);
	}
	//=====================================================GET OPERATION RESULT
	/**
	 * @function returning Math operation result
	 * @and storing it in container
	 */
	public function getOperationResult(){
		
		return $this->_value;
		
	}
	//=====================================================SET OPERATION RESULT
	public function setResultOperation($result_in=null){
		if($result_in!=null){
			$this->_value=$result_in;
		}
		
	}
	
	
	public function getOperationType(){
		return $this->_operationType;
	}
	
	public function setOperationType($operationType){
		$this->_operationType=$operationType;
	}
	
	
}