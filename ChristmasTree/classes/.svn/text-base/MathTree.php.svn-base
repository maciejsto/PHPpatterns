<?php

// require_once dirname(__DIR__).'/interfaces/TreeInterface.php';
// require_once dirname(__DIR__).'/classes/Strategy.php';
// require_once dirname(__DIR__).'/classes/TreeIterator.php';
// require_once dirname(__DIR__).'/classes/OperationNodeIterator.php';

define('ROOT', 0);

class MathTree implements TreeInterface{
	
	//======================================================PROPERTIES
	/**
	 * 
	 * @@var hash table to store node objects
	 */
	public  $_nodes=array();
	/**
	 * 
	 * @var UID for the header node 
	 */
	private $_root;
	/**
	 * 
	 * @var size of list 
	 */
	private $_nodeCount;
	
	/**
	 * @reference to strategy;
	 */
	
	/**
	 * @var _operationNodes 
	 * 
	 */
	private $_operationNodes=array();
	 
	/**
	 * @var unknown_type
	 */
	private $_strategy;
	private $_iterator;
	public $_dataset=array();
	
	//======================================================CONSTRRUCTOR
	public function __construct(){
		
// 		$this->_root=$this->addNode('HEAD');
// 		$this->_nodeCount=0;
		$this->setNodeCount(0);
// 		$this->setRoot($this->getTree(ROOT));
		$this->_root=null;
		
		
	}
	//======================================================DESTRUCTOR
	public function __destruct(){
		foreach ($this->_nodes as $node) {
			unset($node);
		}
	}
	
	//======================================================MAGIC FUNCTIONS
	public function __clone(){}
	
	/**
	 * function which is used to give other functions behaviour to as they 
	 * where overloaded
	 * @param unknown_type $function
	 * @param unknown_type $arguments
	 * @throws Exception
	 */
	public function __call($function ,$arguments){
		try{
			
			$method='addNodeByCall';
			if($function!=$method){
			
				throw new Exception('method '.$method.'  does not exist '."\n");
			}
// 			if(method_exists($this, $method)){
// 				if($arguments instanceof Node){
// 					$this->addNode($arguments[0]);
// 				}
				switch($arguments){
					case $arguments[0] instanceof Node:
						$this->addNode($arguments[0]);
						break;
					case $arguments[0] instanceof MathOperation:
						$this->addOperation($arguments[0]);
						break;
					default:
						throw new Exception('could not invoke method '.$method."\n");
				}
// 			}
		}catch(Exception $e){
			$e->getMessage();
		}
	}
	//=========================================================SET ROOT
	public function setRoot($root){
		$this->_root=$root;
		$this->_nodes[]=$root;
	}
	//=========================================================GET NODE COUNT
	/**
	 * function which return number of nodes in a list 
	 */
	public function getNodeCount(){
		return $this->_nodeCount;
	}
	//=========================================================GET TREE
	public function getTree($root=null){
		if(!is_null($root)){
// 			return $this->_nodes[];
		}
		return $this->_nodes;
	}
	//=========================================================SET NODE COUNT
	/**
	 * function which sets number of nodes
	 * usefule when adding/removing nodes
	 * @param unknown_type $newCount
	 */
	protected function setNodeCount($newCount){
		$this->_nodeCount=$newCount;
	}
	//=========================================================GET NODE
	/**
	 * function return node object of a given index
	 * @param unknown_type $nodeNumberToGet
	 */
	public function getNode($uid){
		
// 		if((is_numeric($uid)) && ($uid<=$this->getNodeCount())){
			
// 			return $this->_nodes[$uid];
// 		}else{
// 			return NULL;
// 		}
		if($uid==null){
			throw new Exception('A unique Id is required');
		}
		$ret=null;
// 		if(array_key_exists($uid, $this->_nodes)===true){
// 			$ret=$this->_nodes[$uid];
// 		}
		foreach ($this->_nodes as $key=>$node){
			if($node->getId()===$uid){
				$ret=$node;
			}
		}
		//return node by its ID
		return $ret;
	}
	//=========================================================CREATE NODE -NOT USED
	public function createNode($value,$uid=null){
		$node=new Node($value,$uid);
		$uid=$node->getId();
		$this->_nodes[$uid]=$node;
		return $uid;
	}
	//=========================================================SET CHILD
	public function setChild($uid,$childUid){
		
		$node=$this->getNode($uid);
		if(!in_array($node, $this->_nodes)){
			throw new Exception('node : '.$node.' does not exist');
		}
		if($node!==false){
			
			$node->setChild($childUid);
			
		}
	}
	//=========================================================SET PARENT
	public function setParent(TreeElement $uid,$parentUid){
// 		$node=$this->getNode($uid);
		$node=$uid;
// 		if(!in_array($node, $this->_nodes)){
// 			throw new Exception('node with ID:' .$uid->getId(). ' : '.' does not exist');
// 		}
		
		if($node!==false){
			$node->setParent($parentUid);
		}
	}
	//=========================================================ADD CHILD - NOT USED
	public function addChild($parentUid=null,$childUid){
		
		if(empty($parentUid)){
			$parentUid=$this->_root;
			//parents point to child
			$this->setChild($parentUid, $childUid);
			//child points to parent
			$this->setParent($childUid, $parentUid);
		}
		$this->_nodeCount++;
		return $childUid;
	}//end of addChild function 
	
	public function addFirst($uid){
		$this->addChild($this->_root,$uid);
	}
	//=========================================================GET CHILDREN
	public function getChildren($uid){
		
		$node=$this->getNode($uid);
		if($node!==false){
			return $node->getChildren();
		}
	}
	//=========================================================FETCH CHILD OBJECTS
	/**
	 * @this function return array of nodes children
	 * @otherwise it returns null
	 * @param unknown_type $uid
	 */
	public function fetchChildrenObjects($uid){
		
		$childrenObjects=array();
		
		$node=$this->getNode($uid);
		
			if($node!==false){
				$childrenReferences=$this->getChildren($node->getId());
					foreach ($childrenReferences as $key => $reference) {
						$ob=$this->getNode($reference);
// 						if($ob instanceof Node){
							$childrenObjects[]=$ob;
// 						}
					}
					
			}
		return $childrenObjects;
	}//end of fetch child objects
	//=========================================================GET PARENT
	public function getParent($uid){
		$ret=false;
		$node=$this->getNode($uid);
		if($node!==false){
			$ret=$node->getParent();
		}
		return $ret;
	}
	//=========================================================GET VALUE
	public function getValue($uid){
		$node=$this->getNode($uid);
		return $node->getValue();
	}
	//=========================================================ADD NODE
	/**
	 * @function which adds Nodes to the tree
	 * (non-PHPdoc)
	 * @see TreeInterface::addNode()
	 * 
	 */
	public function addNode(TreeElement $parent_node=null,TreeElement $node_in){
		
// 		$this->_nodes[$uid]=$node_in;
// 		return $uid;
// 		$tmp=null;

		if(empty($this->_nodes)){
// 		if(is_null($parent_node)){
			$this->_root=$node_in;
			
// 			$this->setParent($node_in->getId(), $parent_node);
// 			$this->setChild($this->_root->getId(),$node_in->getId());
		}else{
			$parentId=$parent_node->getId();
			$rootId=$this->_root->getId();
			$nodeId=$node_in->getId();
// 			var_dump($parentId);
// 			var_dump($nodeId);	
			
			if(empty($parentId) || empty($nodeId)){
				throw new Exception('a node and parent Id are quired');
			}else{
				
				$this->setParent($node_in, $parent_node->getId());
				$this->setChild($parent_node->getId(), $node_in->getId());
			}
		}
		$this->setNodeCount($this->getNodeCount()+1);
		$this->_nodes[$this->getNodeCount()]=$node_in;
		return $node_in->getReference();
// 		return $this->_nodes[$node_in->getId()]=$node_in;
	}//end of add node
	
	//=========================================================ADD NODE2 -FUNCTION UNDER TESTS
	public function addNode2(Node $parent=null,Node $node_in){
		
// 		if(is_null($parent)){
// 			$this->_root=$node_in;
// 			$this->setParent($this->_root->getId(),null);
// 			$this->setChild($node_in->getId(), $this->_root->getId());
// 		}else{
// 			$this->setChild($node_in->getId(), $parent->getId());
// 			$this->setParent($node_in->getId(),$parent->getId());
// 		}
			
		
		
// 		$this->_nodes[]=$node_in;
// 		$count=$this->getNodeCount();
// 		$this->setNodeCount(++$count);
// 		return $node_in->getReference();
		
	}
	//=========================================================GET ROOT
	/**
	 * @this function returns fiest element of _nodes array (if it exist)
	 * @otherwise returns false
	 */
	public function getRoot(){
		$ret=false;
		
		if(!is_null($this->_root)){
			$ret=$this->_root;
		}
		return $ret;
	}
	//=========================================================ADD MATH OPERATION
	/**
	 * 
	 * @param MathOperation $operation_in
	 */
	public function addOperation(MathOperation $operation_in){
		
		$this->setNodeCount($this->getNodeCount()+1);
		$this->_nodes[$this->getNodeCount()]=$operation_in;
		
// 		if($this->_root==null){
// 			$this->_root=$this->_nodes[1];
// 		}else{
// 			$actual=$this->_root;
// 		}
// 		TODO 
		
		return $this->getNodeCount();
	}

	
	//=========================================================REMOVE NODE
	/**
	 * function removes nodes from the list
	 * (non-PHPdoc)
	 * @see TreeInterface::removeNode()
	 */
	public function removeNode(Node $node_in){
// 		$counter=0;
// 		while(++$counter<=$this->getNodeCount()){
// 			if($node_in->getValue()==$this->_nodes[$counter]->getValue()){
// 				for($x=$counter;$x<$this->getNodeCount();$x++){
// 					$this->_nodes[$x]=$this->_nodes[$x+1];
// 				}
			
// 				$this->setNodeCount($this->getNodeCount()-1);
// 			}
// 		}
		if(empty($this->_nodes)){
			return;
		}else{
			$counter=0;
			while(++$counter<=$this->getNodeCount()){
				if($this->_nodes[$counter] instanceof Node){
					if($node_in->getId()===$this->_nodes[$counter]->getId()){
// 					$parentId=$node_in->getParent();
// 					$parentNode=$this->getNode($parentId);
// 					$parentChildren=$parentNode->getChildren();
// 						foreach ($parentChildren as $key=>$child){
// 							if($child===$node_in->getId()){	
// 								unset($child);
// 							}
// 						}
// 					unset($node_in);
					unset($this->_nodes[$counter]);
// 					$this->_nodes[$counter]=null;
// 					unset($this->_nodes[$counter]);
// 					$node_in=null;
// 					unset($this->_nodes[$this->getNodeCount()]);
// 					array_diff($this->_nodes, array($node_in));
// 					$this->_nodes[$this->getNodeCount()]-=$node_in;
					}
				}
// 				$counter++;
// 				
			}
			$this->setNodeCount($this->getNodeCount()-1);
		}
		
		return $this->getNodeCount();
	}
	//=========================================================CHANGE NODE TYPE
	public function changeNodeType(Operation $oldElement,Node $newElement){
		
		$old=$this->getNode($oldElement->getId());
		$old= $newElement;
		unset($oldElement);
// 		return $newElement;
	}
	
	//=========================================================CALCULATE
	
	public function calculate(){
		//instantiniate iterator
		$this->_iterator=new OperationNodeIterator($this);	
// 		$this->_iterator->getOp();
// 		print_r($this->_iterator->current());
// 		print_r($this->_iterator->next());
// 		print_r($this->_iterator->next());
		//set pointer to the end of array
		$end=$this->_iterator->end();
// 		$begin=$this->_iterator->rewind();
// 		$c=count($this->_iterator->_oplist);
// 		var_dump($c);
// 		$cur=current($this->_iterator->_oplist);
// 		print_r($cur);
// 		$end=end($this->_iterator->_oplist);
// 		print_r($end);
// 		$n=next($this->_iterator->_oplist);
// 		$n=$this->_iterator->next();
// 		$n=$this->_iterator->next();
// 		print_r($n);
// 		var_dump($n);
	
		
// 		while($this->_iterator->current()!==false){
// 			$this->_iterator->next();
// 		}
// 		print_r($this->_iterator->_oplist);
// 		$nxt=next($this->_iterator->_oplist);
// 		print_r($nxt);
// 		$nxt2=next($this->_iterator->_oplist);
// 		print_r($nxt2);
// 		next($this->_iterator->_oplist);
// 		next($this->_iterator->_oplist);
// 		$nxtt=next($this->_iterator->_oplist);
// 		print_r($nxtt);
// 		var_dump($this->_iterator->_oplist);
// 		print_r($this->_iterator->current());
// 		print_r($this->_iterator->next());
// 		print_r($this->_iterator->next());
// 		print_r($this->_iterator->next());
// 		print_r($this->_iterator->next());
// 		echo 'list-------------------------------------------------'."\n";
// 		print_r($this->_iterator->_oplist);
// 		print_r($this->_iterator->_list);
// 		var_dump($this->_iterator->current()->getOperationType());
		
// 		var_dump($this->_iterator->previous());
// 		var_dump($this->_iterator->next()->getOperationType());
// 		var_dump($this->_iterator->next()->getOperationType());
// 		var_dump($this->_iterator->previous()->getOperationType());
// 		var_dump($this->_iterator->previous()->getOperationType());
// 		$this->_iterator->rewind();
// 		$ret=null;
		while($this->_iterator->current()!==false){
			$node=$this->_iterator->current();
			$operationType=$node->getOperationType();
			$children=$this->getChildren($this->_iterator->current()->getId());
			$children=$this->fetchChildrenObjects($this->_iterator->current()->getId());
// 			echo "children----****\n";
// 			var_dump($children);
// 			var_dump($operationType);	//ok
			$this->_strategy=new MyStrategy($operationType);
			$result=$this->_strategy->op($children);
// 			echo "result----****\n";
// 			var_dump($result);
			$this->_iterator->current()->setResultOperation($result);
// 			new Node($result);
			$this->changeNodeType($this->_iterator->current(),new Node($result,$this->_iterator->current()->getId()));
// 			echo "tree----****\n";
// 			var_dump($this->getTree());
			$this->_iterator->previous();
// 			$this->_iterator->next();	
			
		}
		return $result;
// 		$this->_iterator->rewind();
// 		return $this->getTree();	
// 		print_r($this->_iterator->current());
// 		return $this->_iterator->current()->getValue();
// 		if($this->_iterator->current() instanceof Operation){
// 			$this->_operationNodes[]=$this->_iterator->current();
// 		}
// 		while($this->_iterator->next()!==null){
// 			if($this->_iterator->current() instanceof Operation){
// 				$this->_operationNodes[]=$this->_iterator->current();
// 			}
// 		}
		
		///////////////////////////
		
		

		
// 		print_r($this->_operationNodes);
// 		return $this->_operationNodes;
// 		echo 'iterator points to :====================================='."\n";
// 		print_r($this->_iterator->current());
// 		$n=$this->_iterator->current();
// 		if ($n instanceof TreeElement){
// 			$parent=$n->getParent();
// 			print_r($parent);
// 		}
// 		print_r($this->_nodes[1]);
		
// 		print_r($this->_iterator->next());
		
// 		$this->_iterator->next();
// 		$this->_iterator->next();
// 		$this->_iterator->next();
// 		$this->_iterator->next();
// 		$this->_iterator->next();
// 		$this->_iterator->next();
// 		var_dump($this);
// 		var_dump($this->_iterator->current());
// 		echo "element\n";
		
	}
	
	//=========================================================CALCULATE //TODO
	/**
	 * function which iterates throuougth the tree nodes 
	 * and calculates resulates the finala result of math operations
	 * (non-PHPdoc)
	 * @see TreeInterface::calculate()
	 */
	public function calculate2(){
		$counter=$this->getNodeCount();
// 		$operationType=null;
// 		$r=null;
		
		while($counter>=1){
			$operationType=null;
			$childrenObjects=array();
			
			if($this->_nodes[$counter] instanceof Operation){
				
// 				$dataSet=array();
// 				$operationType=$this->_node[$counter]->getValue();
// 				foreach ($this->_nodes[$counter] as $key => $node) {
					$node=$this->_nodes[$counter];
// 					var_dump($node);
					$operationType=$node->getOperationType();
					
// 					$id=$this->_nodes[$counter]->getId();
					$id=$node->getId();
					if(empty($id)){
						throw new Exception('errororororoororororor');
					}else{
// 						var_dump($id);
					}
					
					
					$childrenObjects[]=$this->fetchChildrenObjects($id);
					echo 'oooooooooooooooooooooooooooooooooooooo2'."\n";
// 					var_dump($childrenObjects);
					$countChildren=count($childrenObjects);
					if($countChildren>0){
						
						foreach ($childrenObjects as $key => $ob) {
							foreach ($ob as $key => $value) {
								if(!is_null($ob)){
									$this->_dataset[]=$value->getValue();
									
									
								}
								
							}
							
						}
					}
// 					}else{
// // 						echo 'warnign !!!!!!!!!!!!<br/>';
// 					}					
// 					$childrenReference=$node->getChildren();
					
					
// 					foreach ($childrenReference as $key => $value) {
// 						$childrenObjects=$this->getNode($value);
// 					}
// 					echo 'children objects'."\n";
// 					var_dump($childrenObjects);
// 					$r=$this->getNodeChildrenValuesIntoArray();
// 					$this->_dataset[]=$this->childrenToarray($childrenObjects);
// 					var_dump($dataSet);
// 					var_dump($children);
					
// 						foreach ($children as $key => $reference) {
// 							$tmp=$this->getNode($reference);
// 							if($tmp instanceof Node){
// 								array_push($dataSet, $tmp->getValue());
// // 								$dataSet[]=$tmp->getValue();
// 							}else if($tmp instanceof Operation){
								
// 								array_push($dataSet,$tmp->getOperationResult());
// // 								$dataSet[]=$tmp->getOperationResult();
// 							}

							
							
// 						}//end foreach
					
						
// 					$result=$node->getOperationResult();
// 					$dataSet[]+=$result;
// 					$ret2=$op->add($dataSet);
// 					echo '<pre>'.'dataset</br>';
					
// 				}
// 					var_dump($this->_dataset);
					$this->_strategy=new MyStrategy($operationType);
					$ret=$this->_strategy->op($this->_dataset);
					$node->setResultOperation($ret);
					
			}//end if
			
			$counter-=1;
		}//end of while loop
		
		
		return $ret;
		
		//TODO add calculate function body
	}//end of calculate
	
	public function childrenToarray($children){
		
// 		$childrenReferences=null;
		$childrenArray=array();
		foreach ($children as $key => $reference) {
			$childObject=$this->getNode($reference);
			$childrenArray[]=$childObject;
		}
		
// 		$tmp[]=array();
		
		foreach ($children as $key => $node) {
			
// 			$node=$this->getNode($childreference);
// 			if($node==false){
// 				return false;
// 			}else{
				$this->_dataset[]=$node->getValue();
// 			}
			
		}
		return $this->_dataset;
	}
// 	public function getNodeChildrenValuesIntoArray(){
// // 		$value=null;
// // 		$children=null;
// 		foreach ($this->_nodes as $key => $node) {
			
// 			if ($node instanceof Operation){
				
// 				$children=$node->getChildren();
// 					foreach ($children as $key => $reference) {
// 						$tmp=$this->getNode($reference);
// 						$value=$tmp->getValue();
// 						$this->_dataset[]=$value;
// 					}
// 			}
			
// // 			echo '<pre>';
// // 			echo '--------------------------------------------<br/>';
// // 			var_dump($node);
// // 			$value=$node->getValue();
			
// 		}
		
		
		
// 		return $this->_dataset;
// 	}
	
}