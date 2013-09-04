
<?php
// require dirname(__DIR__).'/interfaces/MathOperationInterface.php';
// require_once dirname(__DIR__).'/classes/Strategy.php';

class Strategy_Div {

	public function __construct(){
	}
	public function divNodeElements($dataset){

		$index=0;
		$sum=0;
		// 		while($index<=count($dataset)){
			
		// 			$sum+=$dataset[$index];
		// 			$index++;
		// 		}
		foreach ($dataset as $key => $value) {
			$sum/=$value;
		}
		return $sum;
	}
	public function showResult(){
	}

}