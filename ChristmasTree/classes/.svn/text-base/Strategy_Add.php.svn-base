<?php
// include_once dirname(__DIR__).'/interfaces/MathOperationInterface.php';
// include_once  dirname(__DIR__).'/classes/Strategy.php';


class Strategy_Add  {

	public function __construct(){
		
	}
	public function addNodeElements($dataset){
		
		$index=0;
		$sum=0;
// 		while($index<=count($dataset)){
			
// 			$sum+=$dataset[$index];
// 			$index++;
// 		}
		foreach ($dataset as $key => $value) {
			$sum+=$value;
		}
		return $sum;
	}
	public function showResult(){}
	
	
	public function doOperation($dataset){
		
		$index=0;
		$sum=0;
		// 		while($index<=count($dataset)){
			
		// 			$sum+=$dataset[$index];
		// 			$index++;
		// 		}
		foreach ($dataset as $key => $value) {
			$sum+=$value;
		}
		return $sum;
// 		$this->doOperation($dataset);
	}
	
	
	
	public function doOper($dataset){
		$index=0;
		$sum=0;
		// 		while($index<=count($dataset)){
			
		// 			$sum+=$dataset[$index];
		// 			$index++;
		// 		}
		foreach ($dataset as $key => $value) {
			$val=$value->getValue();
			$sum+=$val;
		}
		return $sum;
	}
	
}