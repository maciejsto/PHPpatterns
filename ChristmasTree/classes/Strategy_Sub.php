
<?php
// require dirname(__DIR__).'/interfaces/MathOperationInterface.php';
// require_once dirname(__DIR__).'/classes/Strategy.php';

class Strategy_Sub {

	public function __construct(){
	}
	public function subNodeElements($dataset){

		$index=0;
		$sum=0;
		// 		while($index<=count($dataset)){
			
		// 			$sum+=$dataset[$index];
		// 			$index++;
		// 		}
		foreach ($dataset as $key => $value) {
			$val=$value->getValue();
			$sum-=$val;
		}
		return $sum;
	}
	public function showResult(){
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
// 			$sum-=$val;
			$sum=$dataset[0]->getValue()-$dataset[1]->getValue();
		}
		return $sum;
	}

}