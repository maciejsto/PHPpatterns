<?php
require_once '../classes/SubjectImpl.php';
require_once '../autoloadClasses.php';

class ObserverTest extends PHPUnit_Framework_TestCase
{
    //fixture
    private $_observer;
    
    public function setUp()
    {
        $this->_observer = new Observer();
    }
    
    
    
    public function testObsrversAreUpdated()
    {
        $observer = $this->getMock('Observer', array('update'));
        
        $observer->expects($this->once())
                 ->method('update')       
                 ->with($this->equalTo('something'));
        
        $subject = new Subject('My subject');
        $subject->attach($observer);
        $subject->doSomething();
        
        $this->assertEquals('My subject' , $subject->getName());
        $this->assertEquals(1, $subject->getObserversCount());
    }
}