<?php
// require dirname(__DIR__).'/interfaces/TreeElementInterface.php';

abstract class TreeElement implements TreeElementInterface{
	
	//properties
	
	private $_id;
	protected $_children=array();
	protected $_parent;
	protected $_value;
	
	//functions
	
	//=========================================================GET VALUE
	public function getValue(){
		return $this->_value;
	}
	//=========================================================SET VALUE
	public function setValue($value){
			$this->_value=$value;
		
		
	}
//=========================================================GET ID
	public function getId(){
		return $this->_id;
	}
	//=========================================================SET ID
	public function setId($id=null){
		
		
		
// 		if(empty($id)){
// 			$this->_id=uniqid();
// 		}else{
			$this->_id=$id;
// 		}
		
	}
	//=========================================================GET REFERENCE
	public function &getReference(){
		return $this->_value;
	}
	//=========================================================GET CHILDREN
	public function getChildren(){
		return $this->_children;
	}
	//=========================================================SET CHILD
	public function setChild($child){
		
		if(!empty($child)){
			$this->_children[]=$child;
		}
	}
	//=========================================================ANY CHILDREN
	public function anyChildren(){
		$ret=false;
		if(count($this->_children)>0){
			$ret=true;
		}
		return $ret;
	}
	//=========================================================CHILDREN COUNT
	public function ChildrenCount(){
		$ret=false;
		if(is_array($this->_children)){
			$ret=count($this->_children);
		}
		return $ret;
	}
	//=========================================================GET PARENT
	public function getParent(){
		return $this->_parent;
	}
	//=========================================================SET PARENT
	public function setParent($parent){
		if(!empty($parent)){
			$this->_parent=$parent;
		}
	}
	
	
}