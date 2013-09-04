<?php
// require dirname(__DIR__).'/interfaces/MathOperationInterface.php';
// require_once dirname(__DIR__).'/classes/Strategy.php';

class Strategy_Mul implements StrategyInterface{
	
	public function __construct(){
	}
	public function mulNodeElements($dataset){
		
		$index=0;
		$sum=0;
// 		while($index<=count($dataset)){
			
// 			$sum+=$dataset[$index];
// 			$index++;
// 		}
		foreach ($dataset as $key => $value) {
			$sum*=$value;
		}
		return $sum;
	}
	public function showResult(){}
	
	public function doOperation($dataset){
		
// 		$res=$this->mulNodeElements($dataset);
// 		return $res;
	}
	
	
	
	public function doOper($dataset){
		$index=0;
		$sum=1;
		// 		while($index<=count($dataset)){
			
		// 			$sum+=$dataset[$index];
		// 			$index++;
		// 		}
		foreach ($dataset as $key => $value) {
			$val=$value->getValue();
			$sum*=$val;
		}
		return $sum;
	}
	
}