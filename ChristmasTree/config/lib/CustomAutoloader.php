<?php

// require_once dirname(__DIR__).'/bootloader/MyBootLoader.php';




/**
 * @this is singleton class , instantiniated only once
 * @author mstoklos
 *
 */
final class Autoloader {
	
	public static $_loader;
	
	
	/**
	 * @creates instance of autoloader
	 * @return Autoloader
	 */
	public static function init(){
		
		if(self::$_loader==NULL){
			self::$_loader=new self();
		}
		
		
		return self::$_loader;
	}
	
	public function __construct(){
// 		$path=get_include_path()
// 			.PATH_SEPARATOR.MY_BASE_PATH.'/classes/';
// 		spl_autoload_extensions('php');
// 		set_include_path($path);
// 		spl_autoload_register(array($this,'loader'));
// 		spl_autoload_register(array($this,'autoload'));
		
	}
	
	
	
	
	
	
	/**
	 * @private funtion loader which is responsible for including required files
	 * @param unknown_type $className
	 */
	private function loader($className){
		
		$className=(string) str_replace('\\',DIRECTORY_SEPARATOR, $className);
		
// 		include_once('../classes/'.$className.'.php');
// 		require_once $className.'.php';
	}
	
	public static function autoload($class){
		if(is_readable($_SERVER['DOCUMENT_ROOT']."/classes/{$class}.php")){
// 			require $_SERVER['DOCUMENT_ROOT']."/classes/{$class}.php";
			
		}
	}
}

