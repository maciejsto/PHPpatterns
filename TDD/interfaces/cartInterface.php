<?php

//declare interface Cart

/**
 * @this is the interface that must be followed by a class that implements it
 * @it defines the layout of the class 
 * @author mstoklos
 *
 */
interface CartInterface{
	
	
	public function isEmpty($a);
	/**
	 * @function which adds items to array 
	 * @param string $name
	 * @param numeric $val
	 * @return object
	 */
	public function addItem2($name,$val);
	/**
	 * @this function gets item from array of objects
	 * @param string $name
	 * @return object on succes else false 
	 */
	public function getItem($name);
// 	public function delItem($name,$val);
	/**
	 * @this function delets items from array ob objets 
	 * @param unknown_type $name
	 * @return empty object on success TODO add case on false first test it !
	 */
	public function delItem($name);
}



?>


