<?php

require_once (dirname(__DIR__).'/bootstrap/bootstrap.php');

class autoloader{
	
	public static $path;
	
	function __construct(){
		set_include_path(
		
				get_include_path()
				.PATH_SEPARATOR.dirname(__DIR__)."/models/"
				.PATH_SEPARATOR.dirname(__DIR__)."/config/"
				.PATH_SEPARATOR.dirname(__DIR__)."/views/"
				.PATH_SEPARATOR.dirname(__DIR__)."/controllers/"
				.PATH_SEPARATOR.dirname(__DIR__)."/classes/"
// 				.PATH_SEPARATOR.dirname(__DIR__)."/bootstrap/"
				.PATH_SEPARATOR.dirname(__DIR__)."/interfaces/"
				.PATH_SEPARATOR.dirname(__DIR__)."/mocks/"
				
				
				// 		.PATH_SEPARATOR.APPLICATION_ROOT."/classes/"
		
		
		
		
		);
	}//end of construct
	
}


// echo dirname(__DIR__)."/classes/".'<br>';
// echo APPLICATION_ROOT."classes/".'<br>';
// $subject=APPLICATION_ROOT."classes/";
// echo str_replace('\\', '/', $subject);

	function __autoload($className){
		
		echo 'loading: '.$className."\n";
		str_replace('\\', '/', $className);
		require_once $className.'.php';
	}
	spl_autoload_register('__autoload');

// echo set_include_path(ROOT.PATH_SEPARATOR.get_include_path());

// function __autoload($className){
		
// 	$path=ROOT.'classes/'.$className.'.php';
// 	if(file_exists($path)){
		
// 		echo 'loading: '.$className.'</br>';
// 		require $path;
// 	}else{
// 		throw new Exception('could not load class: '.$className);
// 	}
	
// }


				



// function __autoload($className){
// 	$path=$className.'.php';
// 	if(file_exists($path)){
	
// 		echo '<b>test of autoload function :<b>';
// 		echo 'laduje klase '.$className.'</br>';
// // 		require_once $className.'.php';
// 		require_once $path;


// 	}else{
// 		throw new Exception('unable to load '.$className);
// 	}


// }
// spl_autoload_register('__autoload');


//     class AutoLoader {
     
//     static private $classNames = array();
     
//     /**
//     * Store the filename (sans extension) & full path of all ".php" files found
//     */
//     public static function registerDirectory($dirName) {
     
//     $di = new DirectoryIterator($dirName);
//     foreach ($di as $file) {
     
//     if ($file->isDir() && !$file->isLink() && !$file->isDot()) {
//     // recurse into directories other than a few special ones
//     self::registerDirectory($file->getPathname());
//     } elseif (substr($file->getFilename(), -4) === '.php') {
//     // save the class name / path of a .php file found
//     $className = substr($file->getFilename(), 0, -4);
//     AutoLoader::registerClass($className, $file->getPathname());
//     }
//     }
//     }
     
//     public static function registerClass($className, $fileName) {
//     AutoLoader::$classNames[$className] = $fileName;
//     }
     
//     public static function loadClass($className) {
//     if (isset(AutoLoader::$classNames[$className])) {
//     require_once(AutoLoader::$classNames[$className]);
//     }
//     }
     
//     }
     
//     spl_autoload_register(array('AutoLoader', 'loadClass'));

?>