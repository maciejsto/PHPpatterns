<?php

require_once '../CarController.php';
require_once '../autoloadCarInterfaces.php';

class CarControllerTest extends PHPUnit_Framework_TestCase
{
    //fixtures
    private $_carController;
    private $_engine;
    private $_gearbox;
    private $_electronics;
    private $_dummyLights;
    
    
    protected function setUp()
    {
        $this->_carController = new CarController();
        $this->_engine = new Engine();
        $this->_gearbox = new GearBox();
        $this->_electronics = new Electronics();
    }
    
    public function testItCanGetReadyTheCar()
    {
        $this->_dummyLights = $this->getMock('Lights');   
        $this->assertTrue($this->_carController->getReadyToGo($this->_engine,$this->_gearbox,$this->_electronics,$this->_dummyLights));     
    }
    
    public function testItCanAccelerate()
    {
        $stubStatusPanel = $this->getMock('StatusPanel');
        $stubStatusPanel->expects($this->any()->method('theIsEnaughFuel')->will($this->returnValue(TRUE)));
    }
}