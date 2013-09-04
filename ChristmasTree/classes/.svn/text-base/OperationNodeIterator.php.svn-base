<?php
// require_once dirname(__DIR__).'/classes/TreeIterator.php';
// require_once dirname(__DIR__).'/classes/AbstractIterator.php';
// require_once dirname(__DIR__).'/classes/TreeIterator.php';
// require_once dirname(__DIR__).'/interfaces/.php';


class OperationNodeIterator extends TreeIterator implements Iterator{
	
	private $_tree;
	public $_list=array();
	public $_oplist=array();
	private $_key;
	
	
	public function __construct(MathTree $tree){
		
		if(is_null($tree)){
			throw new Exception('tree is null');
		}else{
			parent::__construct($tree);
		}
// 		print_r(parent::getOpList());
		$this->_oplist=parent::getOpList();
// 		var_dump($this->_oplist);
// 		$this->_list=$tree->getTree();
// 		$this->_tree=$tree;
		
// 		print_r($this->current());
// 		print_r(parent::current());
		
// 		if(parent::current() instanceof Operation){
// 			$this->_oplist[]=parent::current();
// 		}
// 		while(parent::current()!==null){
// 			if($parent::current() instanceof Operation){
// 				$this->_oplist[]=$parent::current();
// 			}
// 			parent::next();
// 		}
		$this->_key=0;
		
	}
	
	
	public function current(){
// 		return $this->_oplist[$this->_key];
		return current($this->_oplist);
// 		return $this->_oplist;
	}
	
	public function rewind(){
// 		var_dump($this->_oplist);
		reset($this->_oplist);
		$this->_position=1;
// 		$this->_key=0;
	}
	
	public function next(){
		$ret=next($this->_oplist);
		
			if($ret==false){
				return null;
			}else{
				$this->_key++;
				return $ret;
			}
		}
	public function previous(){
	
		$ret=prev($this->_oplist);
		if($ret==false){
			return null;
		}else{
			$this->_key--;
			return $ret;
		}
	
	}
	
	public function end(){
		if(isset($this->_oplist)){
			return end($this->_oplist);
		}else{
			return null;
		}
	}
	public function key(){
		return $this->_key;
	
	}
	
	public function valid(){
		return array_key_exists($this->_position, $this->_oplist);
	
	}
	
	
	
	
	
	
}