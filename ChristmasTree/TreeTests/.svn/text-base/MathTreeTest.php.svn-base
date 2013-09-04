<?php
// require_once dirname(__DIR__).'/classes/MathTree.php';
// require_once dirname(__DIR__).'/classes/Node.php';
// require_once dirname(__DIR__).'/classes/Printable.php';
// require_once dirname(__DIR__).'/classes/Operation.php';




class NodeTest extends PHPUnit_Framework_TestCase{

	//containers, fixtures
	private $_node;
	private $_tree;
	private $_printer;
	private $_treeLeaves;

	public function setUp(){

		$this->_node=new Node(5,1000);
		$this->_tree=new MathTree();
		$this->_printer=new Printable();
		
	}
	//======================================================DATA PROVIDER
	public function provider(){
		return array(
				array('Node'),
				array('MathTree'),
				
				);
	}
	
	
	//======================================================TEST INSTANCE OF
	/**
	 * 
	 * @dataProvider provider
	 * 
	 */
	public function testIsInstanceOf($ob){
		switch($ob){
			case 'Node':
				$this->assertInstanceOf($ob, $this->_node);
				break;
			case 'MathTree':
				$this->assertInstanceOf($ob, $this->_tree);
				break;	
		}

	}
	//======================================================TEST GET NODE COUNT
	public function testGetNodeCount(){
		$this->assertInstanceOf('Node', $this->_node);
		$this->_tree->addNode(null,$this->_node);
		$nodeCount=$this->_tree->getNodeCount();
		$this->assertEquals(1, $nodeCount);
	}
	//======================================================TEST SET NODE COUNT
	public function testSetNodeCount(){
		
	}
	
	public function testTree(){
		$this->assertEquals(array(),$this->_tree->getTree());
		
// 		$this->assertEquals(null, $leaves[1]);
		$this->assertTrue(is_array($this->_tree->_nodes));
		$this->assertTrue(empty($this->_tree->_nodes));
		
		$node1=new Node(1);
		$this->_tree->addNode(null,$node1);
		$this->assertFalse(empty($this->_tree->_nodes));
		
		$c=count($this->_tree->_nodes);
		$nodes=$this->_tree->getTree();
		$this->assertInstanceOf('Node',$nodes[1] );
		
	}
	//======================================================TEST GET NODE
	public function testGetNode(){
		
		//testing only one node adde to the tree
		$this->_tree->addNode(null,$this->_node);
		$id=$this->_node->getId();
		$root=$this->_tree->getRoot();
		$rootID=$root->getId();
		$this->assertEquals($id, $rootID);
// 		var_dump($id);
		
		
		$node=$this->_tree->getNode($this->_node->getId());
		$treNodes=$this->_tree->getTree();
// 		var_dump($treNodes);
		$this->assertInstanceOf('Node', $node);
		$parent=$node->getParent();
		$this->assertEquals(null, $parent);
		
		//testing more nodes . adding more nodes to the tree
		$p=$this->_node;
		$this->assertInstanceOf('Node', $p);
		
		//creating new nodes
		$child1=new Operation('add',300);
		$child2=new Node(1,301);
		$child3=new Node(2,302);
		$child4=new Operation('substract',303);
		$child5=new Operation('divide',304);
		
		//adding nodes to the tree
		$this->_tree->addNode($p,$child1);
		$this->_tree->addNode($child1,$child2);
		$this->_tree->addNode($child1,$child3);
		$this->_tree->addNode($child1,$child4);
		$this->_tree->addNode($child2,$child5);
		
// 		var_dump($this->_tree->_nodes[1]->getId());	
		
		$this->assertEquals(6, $this->_tree->getNodeCount());
// 		$root=$this->_tree->getRoot();
// 		var_dump($root);
// 		var_dump($child1);
		$this->assertInstanceOf('Node', $root);
// 		getting root children
		$RootChildren=$root->getChildren();
// 		$this->assertTrue(is_array($RootChildren));
// 		$firstChild=$RootChildren[0];
// 		$this->assertInstanceOf('Node',$firstChild);	
		
		//getting 'add' node children
		$addNodeChildren=$child1->getChildren();
		$countRootChildren=count($RootChildren);
		$childCount=count($addNodeChildren);
		
		//getting root children
		$this->_printer->println('number of root children:');
// 		var_dump($countRootChildren);
		//getting root parent
		$this->_printer->println('trying to get root parent:');
// 		var_dump($root->getParent());
		//getting child1 children
		$child1Children=$child1->getChildren();
		$this->_printer->println('child1 children');
// 		var_dump($child1Children);	
		//getting child1 parent
		$child1parent=$child1->getParent();
		$this->_printer->println('getting child1 parent:');
// 		var_dump($child1parent);
		//getting child2 parent 
		$child2Parent=$child2->getParent();
		$this->_printer->println('getting child2 parent:');
// 		var_dump($child2Parent);
		//getting child3 parent
		$child3Parent=$child3->getParent();
		$this->_printer->println('getting child3 parent:');
// 		var_dump($child3Parent);
		//getting child4 parent
		$child4Parent=$child4->getParent();
		$this->_printer->println('getting child4 parent:');
// 		var_dump($child4Parent);
		$this->_printer->println('======================================================================');
// 		var_dump($child1parent);
		
// 		var_dump($this->_tree->_nodes);
		$this->_printer->println('child2********************************');
// 		var_dump($child2);
		$this->_printer->println('child2 parent********************************');
// 		var_dump($child2->getParent());
		$this->_printer->println('child2 children********************************');
// 		var_dump($child2->getChildren());
// 		$this->assertInstanceOf('Node', $child2Parent);
// 		var_dump($child2Parent);
		
// 		$this->_printer->println($RootChildren);
// 		var_dump($RootChildren);
// 		var_dump($addNodeChildren);
	}
	/**
	 * @node object provider
	 */
	public function NodeObProvider(){
		return array(
				array(new Node('add',400),new Node(1,401),new Node(2,402)),
// 				array(),
// 				array(),
				);
		
	}
	/**
	 * @dataProvider NodeObProvider
	 * @param unknown_type $pNode
	 */
	public function testNodeHasParent($pNode1,$pNode2,$pNode3){
		
// 		$this->assertTrue(empty($this->_tree));
		$this->_tree->addNode(null,$pNode1);
		$this->_tree->addNode($pNode1,$pNode2);
		$this->_tree->addNode($pNode1,$pNode3);
		
		$nodeCount=$this->_tree->getNodeCount();
		$this->assertEquals(3, $nodeCount);
		
		$retrivedNode1=$this->_tree->getNode($pNode1->getId());
		$retrivedNode2=$this->_tree->getNode($pNode2->getId());
		$retrivedNode3=$this->_tree->getNode($pNode3->getId());
		
		$this->assertInstanceOf('Node', $retrivedNode1);
		$this->assertInstanceOf('Node', $retrivedNode2);
		$this->assertInstanceOf('Node', $retrivedNode3);
		
// 		var_dump($retrivedNode2);
		
		//testing fiest node parent (its null case its root
		$this->assertFalse(!is_null($retrivedNode1->getParent()));
		//testing other nodes
// 		$this->assertFalse(is_null($retrivedNode2->getParent()));
		
	}
	
	
	//======================================================TEST ADD NODE
	public function testAddNode(){
		$this->_tree->addNode(null,$this->_node);
		$this->assertEquals(1, $this->_tree->getNodeCount());
		$parent=$this->_tree->getParent($this->_node->getId());
		$this->assertEquals(null, $parent);
		
	}
	//======================================================TEST DELETE NODE
	public function testDeleteNode(){
		$this->_tree->removeNode($this->_node);
		$this->assertEquals(0, $this->_tree->getNodeCount());
		$tempTree=new MathTree();
		$this->_treeLeaves=$this->_tree->getTree();
		$this->assertTrue(empty($treeLeaves));
		//adding sample node to empty tree
		$sampleNode=new Node('sample',1);
		$sampleNode2=new Node('sample2',2);
		$tempTree->addNode(null,$sampleNode);
		$tempTree->addNode($sampleNode,$sampleNode2);
// 		var_dump($tempTree);
		$this->_treeLeaves=$tempTree->getTree();	
		$this->assertFalse(empty($this->_treeLeaves));
		$c=$tempTree->getNodeCount();
		$this->assertEquals(2, $c);
		$this->assertEquals(1, $sampleNode->getId());
		$this->_printer->println('remowing nodes=====================================================');
		$tempTree->removeNode($sampleNode);
// 		$this->assertEquals(array(),$sampleNode->getChildren()); //TODO fix removing child from list after unsetting object
// 		$this->assertEmpty($tempTree->getTree());
		$cc=$tempTree->getNodeCount();
		$this->assertEquals(1, $cc);
		
		
		$n=$tempTree->getTree();
// 		var_dump($n);
		
	}//end of delete node
	//======================================================TEST CALCULATE
	public function testCalculate2(){
		$c=$this->_tree->getNodeCount();
		$this->assertEquals(0, $c);
		$o=new Operation('add',500);
		$n1=new Node(1,200);
		$n2=new Node(1,2);
		$n3=new Operation('add',3);
		$n4=new Node(1,4);
		$n5=new Operation('mul',5);
		$n6=new Node(3,6);
		$n7=new Node(2,7);
		
		$TREE=new MathTree();
		
		$TREE->addNode(null,$o);
		$TREE->addNode($o,$n1);
		$TREE->addNode($o,$n2);
		$TREE->addNode($o,$n3);
		$TREE->addNode($o,$n5);
		$TREE->addNode($n3,$n4);
		$TREE->addNode($n5,$n6);
		$TREE->addNode($n5,$n7);
		
// 		var_dump($o);
		
		$c=$TREE->getNodeCount();
		$this->assertEquals(8, $c);
		$retVal=$o->getOperationResult();
		$this->assertEquals(null, $retVal);
		
		
		//test get children
		$oChildren=$TREE->getChildren($o->getId());
// 		var_dump($oChildren);
		$this->assertInternalType('array', $oChildren);
		$this->assertInternalType('numeric', $oChildren[0]);
		$childOb1=$TREE->getNode($oChildren[0]);
// 		var_dump($childOb1);
		$childOb4=$TREE->getNode($oChildren[3]);
// 		var_dump($childOb4);
		$this->assertInstanceOf('TreeElement', $childOb1);
		$this->assertInstanceOf('Node', $childOb1);
		$this->assertInstanceOf('TreeElement',$childOb4 );
		$this->assertInstanceOf('Operation',$childOb4 );
		
// 		var_dump($TREE);
		
// 		$res=$TREE->calculate();
// 		var_dump($res);
		$opp=$childOb4->getOperationType();
		$this->assertEquals('mul',$opp );
// 		$this->assertEquals(9, $res);			//FIXME
// 		$this->assertTrue(!empty($res));		//FIXME
		
		$children=$o->getChildren();
		foreach ($children as $key => $reference) {
			$c=$TREE->getNode($reference);
// 			var_dump($c);
		}
		
		$nodes=$TREE->getNodeCount();
// 		var_dump($nodes);
// 		var_dump($this->_tree->_nodes[1]);
// 		$this->_printer->println('while loop =====================================================');
// 		while($nodes>=1){
			
// 			echo 'sdsds';
// 			$nodes--;
// 		}
// 		var_dump($this->_tree->_nodes);
	}//end of calculate
	
	public function testCalculate(){
		$t=new MathTree();
		$n0=new Operation('mul',1);
		$n1=new Operation('add',2);
		$n2=new Operation('mul',3);
		
		$n3=new Node(5,3);
		$n4=new Node(10,4);
		$n5=new Node(15,5);
		
		$t->addNode(null,$n0);
		$t->addNode($n0,$n3);
		$t->addNode($n0,$n4);
		$t->addNode($n0,$n5);
		
		$t->addNode($n0,$n1);
		$t->addNode($n1,$n4);
		$t->addNode($n1,$n4);
		$res=$t->calculate();
// 		echo 'sdsdsds';
// 		print_r($res);
		$this->assertEquals(15000, $res);
// 		echo 'sdsdssd';
// 		$ar=$t->getTree();
// 		var_dump($ar);
// 		foreach ($ar as $key => $value) {
// 			$this->assertInstanceOf('Nodee', $value);
// 		}
		
// 		var_dump($res);
// 		$this->assertEquals('asdasd', $res);
// 		print_r($t->calculate());
// 		$this->_tree->calculate();
// 		$this->assertTrue(is_array($res));
// 		foreach ($res as $key => $value) {
// 			$this->assertInstanceOf('Operation', $value);
// 		}
// 		print_r($res);
	}
	
	//======================================================NODE PROVIDER
	public function NodeProvider(){
		return array(
				array(array(new Node(1,1),new Node(2,2),new Node(3,3))),
				
				);
		
	}
	//======================================================TEST GET NODE CHILDREN VALUES INTO ARRAY
	/**
	 * @dataProvider NodeProvider
	 */
	public function testGetNodeChildrenValuesIntoArray(array $nodes_in){
		foreach ($nodes_in as $key => $node) {
// 			$value=$node->getValue();
// // 			var_dump($value);
// 			$this->assertTrue(!empty($value));
			$this->assertInternalType('array', $this->_tree->childrenToarray($nodes_in));
		}
		
	}
	//======================================================TEST TREE RESULT
	public function testTreeResult(){
// 		$result=$this->_tree->calculate();
// 		$this->assertEquals(120, $result);
	}
	//======================================================TEST FETCH CHILDREN OBJECTS
	public function testFetchChildrenObjects(){
		$o=new Operation('add',10);
		$n1=new Node(1,1);
		$n2=new Node(1,2);
		$n3=new Operation('add',3);
		$n4=new Node(1,4);
		$n5=new Operation('add',5);
		
		
		$this->_tree->addNode(null,$o);
		$this->_tree->addNode($o,$n1);
		$this->_tree->addNode($o,$n2);
		$this->_tree->addNode($o,$n3);
		$this->_tree->addNode($o,$n5);
		$this->_tree->addNode($n3,$n4);
		
		$ob=$this->_tree->getNode(10);
		$this->assertInstanceOf('TreeElement', $ob);
		$res=$this->_tree->fetchChildrenObjects($ob->getId());
		
// 		var_dump($res);
		foreach ($res as $key => $ob) {
			echo $ob->getValue()."\n";
			
		}
		
		
		
		
		$this->assertFalse(empty($res));
		$this->assertInternalType('array', $res);
		$this->assertEquals(1, $res[0]->getId());
	}
	//======================================================TEST CHANGE NODE TYPE
	
	public function TreeElementProvider(){
		return array(
// 				array(new Node(1,1)),
				array(new Operation('mul',2)),
// 				array(new Operation('add',3)),
				);
	}
	/**
	 *@dataProvider TreeElementProvider
	 */
	public function testChangeNodeType($nodes_in){
		
		$testNode=new Node($nodes_in->getOperationResult(),5);
		
		
		$res=$this->_tree->ChangeNodeType($nodes_in,$testNode);
// 		$this->assertTrue($res);
// 		$this->assertTrue(is_object($res));
// 		print_r($res);
// 		$this->assertInstanceOf('Node', $res);
		
	}
	
	
	//======================================================TEST ADD OPERATION ...
	//======================================================TEST CALCULATE ...
	
}