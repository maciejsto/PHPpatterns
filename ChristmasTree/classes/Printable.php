<?php
// require_once dirname(__DIR__).'/classes/Node.php';
// require_once dirname(__DIR__).'/classes/TreeElement.php';

class Printable {
	
	
	public function println( $node){
		switch($node){
			case $node instanceof Node:
				echo '<pre>',print_r($node,true),'</pre>';
				break;
			case is_array($node):
// 				self::printArray($node);
				$this->printArray($node);
				break;
			case is_string($node):
				 echo $node."\n";
				
		}
		
	}
	
	protected function printArray(array $ar){
		foreach($ar as $key=>$value){
			echo '<pre>',print_r($value,true),'</pre>';
			echo $value;
		}
	}
	
}


