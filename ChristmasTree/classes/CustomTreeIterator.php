<?php

class CustomTreeIterator extends ArrayIterator implements RecursiveIterator{
	
	private $_list=array();
	
	private $_next=array();
	
	private $_position;
	
	private $_tree;
	
	public function __construct(array $list, $tree=null){
		$this->_list=$list;
		if(is_null($tree)){
			reset($this->_list);
			$next=current($this->_list);
			$this->_next=$next->getChildren();
		}else{
			$this->_next=$tree;
		}
		
// 		parent::__construct($this->_next);
// 		$this->_tree=$tree;
	}
	
	public function current(){
		$current=parent::current();
		$nObj=$this->_list[$current];
		return $nObj;
	}
	
	public function key(){
		$key=parent::key();
		$key=$this->_next[$key];
		return $key;
	}
	
	public function hasChildren(){
		$next=$this->_list[$this->key()];
// 		$next=$next->getChildren();
// 		return $next;
	}
	public function getChildren(){
		$childOb=$this->_list[$this->key()];
		$children=$childOb->getChildren();
		return new CustomTreeIterator($this->_list,$children);
	}
	
	
}