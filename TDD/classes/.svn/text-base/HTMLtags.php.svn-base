<?php
	define('PATH', realpath(dirname(__DIR__)));
	require_once (PATH.'/config/autoload.php');
?>

<?php
class HTMLtags{
		

		
		private $_tag;
		private $_tagAttributes;
		private $_tagArray;
		
// 		public function __toString(){
// // 			return (string)$this->_tagArray;
// 		}
		
		/**
		 * function which creates html tag 
		 * @param unknown_type $tagName
		 */
		public function __construct(){
			
			$this->_tag=new stdClass();
			$this->_tagAttributes=array();
			$this->_tagArray=array();
			
		}
		//*************************************************************************************
		/**
		 * @this function adds html elements
		 * @param unknown_type $tagName
		 */
		public function addHTMLtag($tagName){

			$args=func_num_args();
			if(!$args==1 && !is_string($args)){
				throw new Exception('function takes exaclty one parameter');
			}
			
			$this->_tag->name=$tagName;
			$this->_tag->attributes=$this->_tagAttributes;
			
			$this->_tagArray[]=(object)$this->_tag;
// 			return $this->_tag;
			return $this;
			
		}
		//*************************************************************************************
		/**
		 * 
		 * @param unknown_type $attr
		 * @param unknown_type $value
		 */
		public function addHTMLattr($attr,$value){
			
			
			
		}
		
		
		

		
	}
?>
