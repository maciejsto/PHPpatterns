<?php

// require_once dirname(__DIR__).'/interfaces/StrategyInterface.php';
// require dirname(__DIR__).'/classes/Strategy_Add.php';
// require dirname(__DIR__).'/classes/Strategy_Mul.php';
// require dirname(__DIR__).'/classes/Strategy_Div.php';
// require dirname(__DIR__).'/classes/Strategy_Sub.php';


class MyStrategy implements StrategyInterface{
	
	
	
	//============================================================PROPERTIES
	
	private $_strategy=null;
	
	//============================================================CONSTRUCTOR
	public function __construct($operation_type){
		switch($operation_type){
			case $operation_type==='add':
				return $this->_strategy=new Strategy_Add();
				break;
			case $operation_type==='sub':
				return $this->_strategy=new Strategy_Sub();
				break;
			case $operation_type==='mul':
				return $this->_strategy=new Strategy_Mul();
				break;
			case $operation_type==='div':
				return $this->_strategy=new Strategy_Div();
				break;
				
		}
	}
// 	public function __clone(){}
	
	//============================================================DO OPERATION
	public function op($dataset_in){
		
		$res=$this->_strategy->doOper($dataset_in);
		
		
		return $res;
	}//
	public function doOperation($dataset){}
	//============================================================SHOW RESULT
	public function showResult(){}
	
}