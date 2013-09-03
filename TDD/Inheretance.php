<?php 
	include_once 'bootstrap/bootstrap.php';

	require_once 'config/autoload.php';
	$autoloader=new autoloader();
?>

<?php

// require_once 'config/autoload.php';








// require_once 'classes/multiInheretance.php';


	$ob=new multiInheretance(array('classA','classB'));
	
	$ob->function1A();		//function1 from A
	$ob->function2A();		//function2 from A
	
	$ob->function1B(); 		//function from B
	$ob->function2B();		//function from B
	

			
	$ob->_publicPropertyA='this is value od pro A';			
	$ob->_publicPropertyB=new stdClass();
	var_dump($ob->_size);
	var_dump($ob->_publicPropertyA);
	var_dump($ob);


?>