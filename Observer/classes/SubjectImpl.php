<?php

require_once '../classes/ISubject.php';

class Subject implements SubjectInt
{
    protected $_observers = array();
    protected $_name;
    
    public function __construct($name)
    {
        $this->_name = $name;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function attach(Observer $observer)
    {
         $this->_observers[] = $observer;   
    }
    public function doSomething()
    {
        $this->notify('something');
    }
    public function doSomethingBad()
    {
        foreach ($this->_observers as $observer){
            $observer->reportError(42, 'Somethhing bad happened', $this);
        }
    }
    public function notify($argument)
    {
        foreach ($this->_observers as $observer) {
            $observer->update($argument);
        }
    }
    
    public function getObserversCount()
    {
        return count($this->_observers);
    }
}