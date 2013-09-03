<?php
class classD {

	private $_property;
	
	//=====================================================================
	public function function1D(){
			echo 'calling '.__METHOD__.'</br>';
	}
	public function function2D(){
		echo 'calling '.__METHOD__.'</br>';
	}
	//=====================================================================
	public function getp($property){
		echo 'calling '.__METHOD__.' from '.__CLASS__.'</br>';
		return $this->_property;
	}
	//=====================================================================
	public function setp($property,$value){
		echo 'calling '.__METHOD__.' from '.__CLASS__.'</br>';
		return $this->_property=$value;
	}
}

?>