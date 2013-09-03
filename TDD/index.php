<?php

require_once 'config/autoload.php';

$autoloader=new autoloader();
$ob=new Cart();
$ob2=new Card();
$ob3=new defaultClass();

$item1=$ob->addItem2('adadasdasdcherry', 1);	
var_dump($item1);
// $ob->addItem2('orange', 2);
// $ob->addItem2('apple', 10);

// $item1->name='bla';	
// $item1->newproperty='new_prop';
// var_dump(Cart::$_entries2);
// $ob->delAll2();
// var_dump($ob);
// $item2=$ob->addItem2('myItem2', 4);



$s='<div></div>';
$xml=simplexml_load_string($s);
$xml->addChild('div')->addAttribute('name', 'div1');
$xml->addAttribute('name', 'name1');
// var_dump($xml);


?>