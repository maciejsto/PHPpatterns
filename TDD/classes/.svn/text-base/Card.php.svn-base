<?php

class Card {

	private static  $_entries=array();
		
		
	// 			array(
	// 			'name'=>'',
	// 			'value'=>''),
	// 			array(
	// 			'name'=>'',
	// 			'value'=>''
	// 			));

	private $_param;
	/**
	 * function which adds items to basket
	 * @param unknown_type $name
	 * @param unknown_type $val
	 */
	public function addItem($name,$val){
		if(is_string($name) && is_numeric($val)){
			return self::$_entries[$name]=$val;
		}
		// 		self::$_entries[]=array('name'=>$name,'value'=>$val);
		// 		return $val;
		// 		return true;
	}

	/**
	 * function which returns the value of an item
	 * @param unknown_type $name
	 */
	public function getItem($name){

		return self::$_entries[$name];
	}
	/**
	 * function which delets particular item from array
	 * @param unknown_type $name
	 */
	public function delItem($name){
		return self::$_entries[$name]=null;
	}

	/**
	 *@ function which returns all elements added to basket
	 *@return array()
	 */
	public function getAll(){

		return self::$_entries;
	}
	/**
	 * function which delets all entries in aray
	 */
	public function delAll(){
		self::$_entries=array();
		// 		return true;
	}
	/**
	 * function which chcks if an item exists in array
	 */
	public function exist($name){
		if(isset(self::$_entries[$name])){
			return $name;
		}else{
			return false;
		}
	}

}

?>