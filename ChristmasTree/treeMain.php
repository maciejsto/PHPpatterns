<?php
// require_once 'classes/Node.php';
// // require_once  'classes/TreeIterator.php';
// require_once 'classes/MathTree.php';
// // // require_once 'classes/MathOperations.php';
// // require_once 'classes/Printable.php';
// // require_once 'classes/CustomTreeIterator.php';
// require_once 'classes/Operation.php';






// //============================DATASET
// $categories=array();
// $categories[]=array('id'=>1,'value'=>'add','parent_id'=>1);
// $categories[]=array('id'=>2,'value'=>10,'parent_id'=>2);
// $categories[]=array('id'=>3,'value'=>20,'parent_id'=>2);
// $categories[]=array('id'=>4,'value'=>'substract','parent_id'=>1);

$node=new Node(0,1);
// var_dump($node);
$node2=new Node(1,2);
$node3=new Node(2,3);
$node4=new Node(3,4);

$op1=new Operation('add',5);
$op2=new Operation('add',6);
$op3=new Operation('add',7);


$t=new MathTree();
$t->addNode(null,$op1);
$t->addNode($op1,$op2);
$t->addNode($op1,$op3);

$t->addNode($op2,$node);
$t->addNode($op2,$node2);

$t->addNode($op3,$node3);
$t->addNode($op3,$node4);

$r=$t->calculate();

echo $r;

// $NodeTree=new MathTree();

// // $NodeTree->addNode($node);
// // $NodeTree->addNode($node2);
// // $NodeTree->addNode($node3);
// // $NodeTree->addNode($node4);
// // var_dump($NodeTree);




// foreach ($categories as $category){
// 	$uid=$NodeTree->createNode($category['value'],$category['id']);
// 	$parentId=null;
// 	if(!empty($category['parent_id'])){
// 		$parentId=$category['parent_id'];
// 	}
	
// 	$NodeTree->addChild($parentId, $uid);
	
// }
// $tree=$NodeTree->getTree();
// $printer=new Printable();
// foreach ($tree as $node){
	
// 	$printer->println($node);
// // 	echo $node->getValue().'<br>';
// // 	echo '<pre>',print_r($node,true),'</pre>';
	
	
	
// }
// echo '<hr>';

// echo $NodeTree->getNodeCount();

// // $parent=$NodeTree->getParent(2);

// // var_dump($parent);

// // $rootChild=$NodeTree->setChild($root, $NodeTree->get)


// // $TreeIterator=new TreeIterator($NodeTree);

// // $current=$TreeIterator->getCurrentTreeNode();

// // $myNode=new Node(5);
// // $myNode->setId();
// // $myNode2=new Node(10,1);
// // $myNode3=new Node(7,2);
// // $myNode0=new Node('add',5);

// // $MyTree=new MathTree();
// // $MyTree->addNode(null,$myNode);
// // $MyTree->addNode($myNode,$myNode0);
// // $MyTree->addNode($myNode0,$myNode2);
// // $MyTree->addNode($myNode0,$myNode3);


// // echo $nodeCount=$MyTree->getNodeCount();

// // $rootNode=$MyTree->getRoot();




// // // $printer->println($children);

// // $rootNode=$MyTree->getRoot();



// // $TreeIterator->rewind();






// $printer->println('root node==========================================');
// $printer->println($rootNode);
// $printer->println('children==========================================');
// $children=$MyTree->getChildren(5);
// var_dump($children);
// $printer->println($children);

// $printer->println('test==========================================');


// $o=new operation('add',10);
// $o2=new Operation('add',11);
// $n0=new Node(5,0);
// $n1=new Node(5,1);
// $n2=new Node(5,2);
// $n3=new Node(5,3);
// $n4=new Node(100,4);

// $testTree=new MathTree();
// $testTree->addNode(null,$o);
// $testTree->addNode($o,$o2);
// $testTree->addNode($o,$n3);
// $testTree->addnode($o2,$n0);
// $testTree->addnode($o2,$n1);
// $testTree->addnode($o2,$n2);
// $testTree->addNode($o,$n4);




// var_dump($o2->getOperationResult());
// $calc=$testTree->calculate();

// echo '<pre>';
// $printer->println('result of calculation=========================');
// echo '<pre>';
// var_dump($calc);
// $printer->println('testing function addToarray=========================');

// // $ar=$testTree->getNodeChildrenValuesIntoArray();
// var_dump($testTree->_dataset);
// $testTreeChildren=$testTree->getTree();
// $res=$testTree->calculate();
// $v=$o2->getOperationResult();
// // var_dump($v);
// $printer->println('result=========================');
// var_dump($res);
// // var_dump($testTreeChildren);
// // var_dump($ar);
// // $nId=$n->getId();
// // $oId=$o->getId();
// // $res=$o->getOperationResult();

// // var_dump($nId);
// // var_dump($oId);
// // var_dump($res);











// // while($TreeIterator->hasNextTreeNode()){
// // 	$node=$TreeIterator->getNextTreeNode();
// // 	$val=$node->getValue();
// // 	$ref=$node->getReference();
	
// // 	echo $val.'<br/>';
// // }
// // 	echo $ref.'</br>';
// // }

// // print_r($NodeTree->getNode(1));
// // echo "<hr>";
// // var_dump($TreeIterator->getCurrentTreeNode());

// // print_r($NodeTree->_root);
// // $NodeTree->removeNode($node4);
// // $NodeTree->removeNode($node3);
// // $NodeTree->removeNode($node2);
// // $NodeTree->removeNode($node);

// // while($TreeIterator->hasNextTreeNode()){
// // 	$node=$TreeIterator->getNextTreeNode();
// // 	$val=$node->getValue();
// // 	$ref=$node->getReference();

// // 	// 	echo $val.'<br/>';
// // 	echo $ref.'</br>';
// // }

// // $currentNode=$TreeIterator->getCurrentTreeNode();

// // echo '<hr/>';

// // $nextNode=$TreeIterator->getNextTreeNode();

// // $hasNextNode=$TreeIterator->hasNextTreeNode();

// // echo '<hr/>';
// // // var_dump($hasNextNode);



// // // echo $TreeIterator->_currentNode;
// // // echo $NodeTree->getNodeCount();
// // // $prevoiusnode=$TreeIterator->getPreviousTreeNode();
// // // echo $prevoiusnode->getValue();
// // // $p=$TreeIterator->getPreviousTreeNode();






// // $testNode=new Node(10);
// // $testOperation=new MathOperation();
// // $NodeTree->addNodeByCall($testNode);
// // $NodeTree->addNodeByCall($testOperation);




// // $currentNode=$TreeIterator->getCurrentTreeNode();
// // echo '<hr/>';
// // echo $NodeTree->getNodeCount();

// // $currentNode=$TreeIterator->getCurrentTreeNode();

// // // echo $currentNode->getValue();


