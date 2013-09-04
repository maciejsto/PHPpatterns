<?php

// /**
//  * @define important helpers
//  * @var unknown_type
//  */


$path=str_replace('\\',DIRECTORY_SEPARATOR,(string)(dirname(__DIR__.'/')));

define('MY_BASE_PATH',$path);


// $path=get_include_path()
// 	.PATH_SEPARATOR.dirname(__DIR__)."/models/"
// 	.PATH_SEPARATOR.MY_BASE_PATH.'classes/'
// 	.PATH_SEPARATOR.MY_BASE_PATH.'config/'
// 	.PATH_SEPARATOR.MY_BASE_PATH.'interfaces/'
// 	.PATH_SEPARATOR.MY_BASE_PATH.'TreeTests/';
	;

// var_dump($path);
			

// // /**
// //  * @get include path 
// //  * @var unknown_type
// //  * @return string (path)
// //  */
// $path=get_include_path();

// $path.=(string)(PATH_SEPARATOR.MY_BASE_PATH.'classes/');
// print_r($path);
// $path.=(string)(PATH_SEPARATOR.MY_BASE_PATH.'interfaces/');
// print_r($path);
// $path.=(string)(PATH_SEPARATOR.MY_BASE_PATH.'TreeTests/');
// $path.=(string)(PATH_SEPARATOR.MY_BASE_PATH.'bootloader/');
// $path.=(string)(PATH_SEPARATOR.MY_BASE_PATH.'config/');

// // /**
// //  * @setting include path
// //  */

// 	$path=get_include_path()
// 		.PATH_SEPARATOR.MY_BASE_PATH.'classes/';
// 	set_include_path($path);



