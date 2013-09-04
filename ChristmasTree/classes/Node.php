<?php

// require_once dirname(__DIR__).'/interfaces/NodeInterface.php';
// require_once dirname(__DIR__).'/classes/Node.php';
// require_once dirname(__DIR__).'/classes/Printable.php';
// require_once dirname(__DIR__).'/classes/TreeElement.php';
// $autoloader=new Autoloader();

class Node extends TreeElement implements TreeElementInterface{
	//
	//=========================================================PROPERTIES
	/**
	 * $holds reference to object providing printing functionality
	 * @var unknown_type
	 */
	private $_printer;
	/**
	 * 
	 * @var _value for the value field
	 */
// 	private $_value;
	/**
	 * 
	 * @var _uid for this node 
	 */
// 	private $_id;
	/**
	 * 
	 * @var _parent uid of the parent node
	 */
// 	private $_parent;
	/**
	 * @var _children collection of uids for the child nodes 
	 */
// 	private  $_children=array();
	
	//=========================================================CONSTRUCTOR
	public function __construct($value=null,$id=null){
		
		
		$this->setValue($value);
		$this->setId($id);
// 		$this->_parent=null;
// 		$this->setParent(null);
// 		$this->_value=$value;
// 		$this->_id=$id;	
// 		$this->_key=$key;
// 		if(!isset($value)){
// 			throw new Exception('A value is required to create a node');
// 		}
	}
	//=========================================================DESTRUCTOR
	public function __destruct(){
		unset($this->_parent,$this->_children,$this->_value,$this->_id);
	}
	
	//=========================================================TO STRING
// 	public function __toString(){
// // 		return (($this->_key!=null)?((string)$this->_key):('NULL'));
// 	}
	//=========================================================GET VALUE
// 	public function getValue(){
// 		return $this->_value;
// 	}
// 	//=========================================================SET VALUE
// 	public function setValue($value){
// 		$this->_value=$value;
		
// 	}
// 	//=========================================================GET ID
// 	public function getId(){
// 		return $this->_id;
// 	}
// 	//=========================================================SET ID
// 	public function setId(&$id=null){
		
		
		
// 		if(empty($id)){
// 			$this->_id=uniqid();
// 		}else{
// 			$this->_id=$id;
// 		}
		
// 	}
// 	//=========================================================GET REFERENCE
// 	public function &getReference(){
// 		return $this->_value;
// 	}
// 	//=========================================================GET CHILDREN
// 	public function getChildren(){
// 		return $this->_children;
// 	}
// 	//=========================================================SET CHILD
// 	public function setChild($child){
		
// 		if(!empty($child)){
// 			$this->_children[]=$child;
// 		}
// 	}
// 	//=========================================================ANY CHILDREN
// 	public function anyChildren(){
// 		$ret=false;
// 		if(count($this->_children)>0){
// 			$ret=true;
// 		}
// 		return $ret;
// 	}
// 	//=========================================================CHILDREN COUNT
// 	public function ChildrenCount(){
// 		$ret=false;
// 		if(is_array($this->_children)){
// 			$ret=count($this->_children);
// 		}
// 		return $ret;
// 	}
// 	//=========================================================GET PARENT
// 	public function getParent(){
// 		return $this->_parent;
// 	}
// 	//=========================================================SET PARENT
// 	public function setParent($parent){
// 		if(!empty($parent)){
// 			$this->_parent=$parent;
// 		}
// 	}
	
	
	
}