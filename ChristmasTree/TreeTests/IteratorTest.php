<?php
// require_once dirname(__DIR__).'/classes/MathTree.php';
// require_once dirname(__DIR__).'/classes/Node.php';
// // require_once dirname(__DIR__).'/classes/Printable.php';
// require_once dirname(__DIR__).'/classes/Operation.php';
// require_once dirname(__DIR__).'/classes/TreeIterator.php';



class TreeIteratorTest extends PHPUnit_Framework_TestCase{

	//======================================================PROPERTIES
	//containers, fixtures
// 	private $_node;
// 	private $_tree;
// 	private $_printer;
// 	private $_treeLeaves;
	private $_iterator;
	private $_tree;

	//======================================================SET UP
	public function setUp(){
		$tree=$this->_tree=new MathTree();
		$n1=new Node(1,1);
		$n2=new Operation('add',2);
		$n3=new Node(2,3);
		$n4=new Operation('mul',4);
		
		$this->_tree->addNode(null,$n1);
		$this->_tree->addNode($n1,$n2);
		$this->_tree->addNode($n1,$n3);
		$this->_tree->addNode($n3,$n4);
		
		
		
		$this->_iterator=new TreeIterator($this->_tree);
// 		$this->_node=new Node(5);
// 		$this->_tree=new MathTree();
// 		$this->_printer=new Printable();
		
	}
	//=========================================================GET VALUE
	public function testInstanceOf(){
		$this->assertInstanceOf('TreeIterator', $this->_iterator);
	}
	//=========================================================GET VALUE
	public function testRewind(){
		
		$this->assertEquals(1, $this->_iterator->getPosition());
		$this->_iterator->setPosition(5);
		
		$this->assertEquals(5, $this->_iterator->getPosition());
		$this->_iterator->rewind();
		$this->assertEquals(1, $this->_iterator->getPosition());
		
		
		
	}
	//=========================================================GET VALUE
	public function testCurrent(){
		$current=$this->_iterator->current();
// 		var_dump($current);
	}
	
	//=========================================================GET VALUE
	public function testNext(){
		$next=$this->_iterator->next();
		$this->assertEquals(2, $next->getId());
		$this->assertEquals('add', $next->getOperationType());
		$this->assertEquals(3, $this->_iterator->next()->getId());
		$this->assertEquals(4, $this->_iterator->next()->getId());
		$this->assertEquals(4, $this->_iterator->current()->getId());
// 		
// 		var_dump($n);
		echo "next\n";
// 		var_dump($next);
	}
	
	//=========================================================GET VALUE
	public function testKey(){
		$this->_iterator->current();
		echo '=======================================================key'."\n";
		var_dump($this->_iterator->key());
		
		$this->_iterator->next();
		var_dump($this->_iterator->key());
		$this->_iterator->next();
		$res=$this->_iterator->key();
// 		var_dump($res);
	}
	
	//=========================================================GET VALUE
	public function testGetPosition(){
		$position=$this->_iterator->getPosition();
		$this->assertEquals(1, $position);
	}
	//=========================================================GET VALUE
	public function testValid(){
		
		$this->assertEquals(1,$this->_iterator->current()->getId());
		echo "test valid\n";
		$this->_iterator->rewind();
		var_dump($this->_iterator->current());
		var_dump($this->_iterator->key());
		var_dump($this->_iterator->next());
		var_dump($this->_iterator->key());
		var_dump($this->_iterator->next());
		var_dump($this->_iterator->key());
		var_dump($this->_iterator->next());
		var_dump($this->_iterator->key());
// 		var_dump($this->_iterator->next());
// 		var_dump($this->_iterator->key());
// 		var_dump($this->_iterator->key());
// 		var_dump($this->_iterator->key());
		$this->_iterator->rewind();
		echo "test test getNode\n";
		var_dump($this->_tree->getNode($this->_iterator->key()));
		$this->_iterator->next();
		var_dump($this->_tree->getNode($this->_iterator->key()));
		$this->_iterator->next();
		var_dump($this->_tree->getNode($this->_iterator->key()));
		$this->_iterator->next();
		var_dump($this->_tree->getNode($this->_iterator->key()));
		$this->_iterator->next();
		var_dump($this->_tree->getNode($this->_iterator->key()));
// 		var_dump($this->_iterator->next());
		
		$position=$this->_iterator->getPosition();
		$this->assertEquals(4, $position);
// 		$this->assertEquals(1,$this->_iterator->current()->getId());
		$ret=$this->_iterator->valid();
// 		$this->assertTrue($ret);
// 		var_dump($ret);
		
	}
	//=========================================================GET VALUE
	public function testHasNextTreeNode(){
		
		$this->_iterator->rewind();
		$result=$this->_iterator->hasNextTreeNode();
		$this->assertTrue($result);
		$this->_iterator->next();
		$this->_iterator->next();
// 		$this->_iterator->next();
// 		$this->_iterator->next();
		$result2=$this->_iterator->hasNextTreeNode();
		$this->assertTrue($result2);
	}
	//=========================================================TEST PREVIOUS
	public function testPrevious(){
		$this->_iterator->rewind();
		$c=$this->_iterator->current();
		$this->assertEquals($this->_tree->getNode(1), $c);
		
		$this->_iterator->next();
		$this->assertEquals(2, $this->_iterator->current()->getId());
		
		$c2=$this->_iterator->current();
		$this->assertEquals($this->_tree->getNode(2),$c2);
		
		$p=$this->_iterator->previous();
		$this->assertEquals(1, $this->_iterator->current()->getId());
		$this->assertEquals($this->_tree->getNode(1), $p);
		
		
		$this->assertTrue($this->_iterator->current()->getId()==1);
		$this->assertEquals(1,$this->_iterator->key());
		$id=$this->_iterator->next()->getId();
// 		$this->assertEquals(2,$id);
		$this->assertTrue($this->_iterator->current()->getId()==2);
		$this->assertEquals(2, $this->_iterator->key());
		
		var_dump($this->_iterator->next());
		var_dump($this->_iterator->current());
// 		$this->assertEquals(3, $this->_iterator->next()->getId());
		
		
		$this->_iterator->rewind();
		$this->assertEquals(1, $this->_iterator->key());
		$this->assertEquals(2, $this->_iterator->next()->getId());
		$this->assertEquals(2, $this->_iterator->current()->getId());
		$this->assertEquals(2, $this->_iterator->key());
		$this->_iterator->previous();
		$this->assertEquals(1, $this->_iterator->key());
		$this->assertEquals(1, $this->_iterator->current()->getId());
		
		$this->assertEquals(2, $this->_iterator->next()->getId());
		
	}
	public function listProvider(){
		return array(
				array(array('apple','banana','orange')),
				);
	}
	/**
	 * @dataProvider listProvider
	 */
	public function testPointToEnd($list_in){
		$this->assertEquals('orange', $this->_iterator->pointToEnd($list_in));
		
	}
	
	public function testEnd(){
		$this->assertEquals($this->_tree->getNode(4),$this->_iterator->end());
		echo 'prevoius'."\n";
		print_r($this->_iterator->previous());
	}
	
	
	public function testGetOp(){
		$this->assertInternalType('array', $this->_iterator->getOpList());
		$ar=$this->_iterator->getOpList();
		foreach($ar as $key => $value) {
			$this->assertInstanceOf('Operation', $value);
		}
		
		$list=$this->_iterator->getOpList();
		$c=count($list);
		print_r($list);
		$this->assertEquals(2, $c);
	}
	
}