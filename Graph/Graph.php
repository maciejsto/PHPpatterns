<?php

//building a graph class
class Graph 
{   
    //fields
    private $_graph;
    private $_visited = array();
    
    //constructor function
    private function __construct(){}
    
    //set a graph 
    public function setGraph($graph){
        $this->_graph = graph;
    }

    //implementing breath fierst search algorithm
    
    public function breathFirstSearch($source, $destination){
        if (empty($source) or empty($destination)) return;
        foreach ($this->_graph as $key => $value) {
            //TODO ;
        }
    }
}