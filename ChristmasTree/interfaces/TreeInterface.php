<?php
interface TreeInterface{
	
	//properties
// 	private $_nodes=array();
	
	
	//methods
	public function addNode(TreeElement $parent_node,TreeElement $node_in);
	public function removeNode(Node $node);
	public function calculate();
}