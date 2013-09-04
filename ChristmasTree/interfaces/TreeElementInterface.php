<?php
/**
 * @this interface if common for Node and Operation objects 
 * @which are both Tree elements
 * @author mstoklos
 *
 */
interface TreeElementInterface {
	
	
	
	//functions
	
	public function getValue();
	public function setValue($value);
	public function getId();
	public function setId($value);
	public function &getReference();
	public function getChildren();
	public function setChild($child);
	public function anyChildren();
	public function ChildrenCount();
	public function getParent();
	public function setParent($parent);
}