<?php
class bootstrap{
	
	
	//let's set up a root path constant
	// define('APPLICATION_ROOT',getcwd().DIRECTORY_SEPARATOR);
	// $subject=APPLICATION_ROOT;
	public static  $_app_root;
	static function app_root(){
		$subject=str_replace('\\', '/', getcwd().DIRECTORY_SEPARATOR);
		define('APPLICATION_ROOT',$subject);
	
		self::$_app_root=APPLICATION_ROOT;
	}
	
	
	// echo dirname(__FILE__);
	// echo $_SERVER['SERVER_NAME'];
	// echo $_SERVER['SERVER_ADDR'];
	// echo $_SERVER['SERVER_PORT'];
	// echo $_SERVER['SERVER_PROTOCOL'];
	// echo $_SERVER['SERVER_SOFTWARE'].'</br>';
	
	// echo dirname(__DIR__);
	// echo $_SERVER['DOCUMENT_ROOT'].'</br>';
	// echo realpath(ROOT).'</br>';
	
	
	// echo APPLICATION_ROOT;
	// define includes and config
	
}

?>