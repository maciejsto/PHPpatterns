<?php

// require_once dirname(__DIR__).'/classes/TreeIterator.php';
// require_once dirname(__DIR__).'/interfaces/IteratorInterface.php';


class TreeIterator implements Iterator{
	//=========================================================PROPERTIES
	
	public $_currentNode;
	
	private $_list;
	private $_position=1;
	private $_key=1;
	private $_tree;
	private $_oplist=array();
	const _rootIndex=1;
	//=========================================================GET POSITION
	public function getPosition(){
		return $this->_key;
	}
	//=========================================================SET POSITION
	public function setPosition($position){
		$this->_key=$position;
	}
	
	//=========================================================CONSTRUCTOR
	public function __construct(MathTree $tree_in){
// 		$this->_NodeList=$tree_in->getTree();
		$this->_list=$tree_in->getTree();
		$this->_tree=$tree_in;
		$this->rewind();
// 		$this->_NodeList=$tree_in;
// 		$this->_currentNode=0;
	}
	//=========================================================REWIND
	public function rewind(){
		reset($this->_list);
// 		next($this->_list);
// 		next($this->_list);
// 		$this->_key=key($this->_list);
// 		$this->_key=$this->_
		$this->_position=1;
		$this->_key=1;
	}
	
	//=========================================================CURRENT
	public function current(){
// 		return $this->_tree->getNode($this->_key);
		return $this->_list[$this->_key];
	}
	
	//=========================================================NEXT
	public function next(){
		
		
		$ret=next($this->_list);
		
		if($ret==false){
			return null;
		}else{
			$this->_key++;
			return $ret;
		}
	}
	public function previous(){
		
		$ret=prev($this->_list);
		if($ret==false){
			return null;
		}else{
			$this->_key--;
			return $ret;
		}
// 		$current=$this->current();
// 		$key=$this->key();
// 		if($key>1){
// 			$ret=$this->_list[$key-1];
// 			$this->_key--;
// 		}
		
		
	}
	//=========================================================KEY
	public function key(){
// 		while (isset($)){
// 		while($this->next()!==null){
// 		if(!is_null($this->next())){
			return $this->_key;
// 			return key($this->_list);
			
// 		}
		
	}
	
	public function valid(){
// 		return key($this->_list)!==null;
// 		return $this->current()!==false;
		return array_key_exists($this->_position, $this->_list);
// 		return !is_null(key($this->_list));
// 		$firstposition=0;
// 		$lastPosition=count($this->_list);//ignore head and tail
// 		return isset($this->_list[$this->_key]) && $this->_position> $firstposition && $this->_position <$lastPosition;
		
	}
	//=========================================================GET CURRENT NODE
	public function getCurrentTreeNode(){
		if(($this->_currentNode>0) && ($this->_NodeList->getNodeCount()>=$this->_currentNode)){
			return $this->_list->getNode($this->_currentNode);
		}
	}
	
	//=========================================================GET NEXT NODE
	public function getNextTreeNode(){
		if($this->hasNextTreeNode()){
			return $this->_list->getNode(++$this->_currentNode);
		}else{
			return null;
		}
	}
	//=========================================================HAS NEXT NODE
	public function hasNextTreeNode(){
		if($this->_tree->getNodeCount()>$this->_key){
			return true;
		}else{
			return false;
		}
	}
	//=========================================================HAS PREVIOUS NODE
	public function hasPreviousNode(){
		if(1<$this->_currentNode){
			return true;
		}else{
			return false;
		}
	}
	//=========================================================GET PREVOIUS TREE NODE
	public function getPreviousTreeNode(){
		if($this->hasPreviousNode()){
			return $this->_list->getNode(--$this->_currentNode);
		}else{
			return null;
		}
	}
	//=========================================================GET ROOT NODE
	public function getRootNode(){
		if(!empty($this->_list)){
			return $this->_list->getNode(self::_rootIndex);
		}else{
			return false;
		}
	}
	//=========================================================GET POINT TO END OF ARRAY
	public function pointToEnd($list){
		if(isset($this->_list)){
			return end($list);
		}
		
		
	}
	public function end(){
		if(isset($this->_list)){
			return end($this->_list);
		}else{
			return null;
		}
	}
	
	public function __destruct(){
		unset($this->_list,$this->_tree);
	}
	
	public function getOpList(){
		$this->rewind();
		
		
// 		echo 'prevoius';
// 		print_r($this->previous());
// 		while ($this->current()!==null){
// 			if($this->current() instanceof Operation){
// 				$this->_oplist[]=$this->current();
// 			}
// 			$this->next();
// 		}
		foreach ($this->_list as $key => $value) {
			if($value instanceof Operation && !in_array($value, $this->_oplist)){
				$this->_oplist[]=$value;
			}
		}
		
		
		return $this->_oplist;
	}
	
	
	
	
	
	
	
	
	
	
	
	
}