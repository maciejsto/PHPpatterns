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
        $this->_statusPanel = new StatusPanel();
    }
    
    public function testItCanGetReadyTheCar()
    {
        $this->_dummyLights = $this->getMock('Lights');   
        $this->assertTrue($this->_carController->getReadyToGo($this->_engine,$this->_gearbox,$this->_electronics,$this->_dummyLights));     
    }
    
    /**
     * test of CarController with Mock objects
     */
    public function testItCanAccelerate()
    {
        $stubStatusPanel = $this->getMock('StatusPanel');
        $electronics = $this->getMock('Electronics');

        /*
         * expecting function thereIsEnaughFuel
         */
        $stubStatusPanel->expects($this->any())
                        ->method('thereIsEnaughFuel')
                        ->will($this->returnValue(TRUE));
        
        /**
         * expecting function EngineIsRunning
         */
        $stubStatusPanel->expects($this->any())
                        ->method('engineIsRunning')
                        ->will($this->returnValue(TRUE));
        
        $electronics->expects($this->any())
                    ->method('accelerate');
        
        $this->assertTrue($electronics->accelerate() == null);
        $this->assertTrue($stubStatusPanel->engineIsRunning());
        
        
        $val = $this->_carController->goForward($electronics, $stubStatusPanel);
        
        $this->assertEquals(TRUE, $val);
    }
    /**
     * test of CarController with real objects
     */
    public function testCanAccelerateStdWay()
    {
        $val = $this->_carController->goForward($this->_electronics, $this->_statusPanel);
        $this->assertEquals(null, $val);
    }
    
    
    public function testItCanStop()
    {
        $halfBreakingPower = 50;
        $electronicsSpy = new SpyingElectronics();
        $electronicsSpyMock = $this->getMock('Electronics');
        $statusPanelSpy = new SpyingStatusPanel();
        $statusPanelSpyMock = $this->getMock('StatusPanel');
        
        $electronicsSpyMock->expects($this->exactly(2))->method('pushBreaks')->with($halfBreakingPower);
        $statusPanelSpyMock->expects($this->at(0))->method('getSpeed')->will($this->returnValue(1));
        $statusPanelSpyMock->expects($this->at(1))->method('getSpeed')->will($this->returnValue(0));
        
        
        
        
        $carController = new CarController();
        $carController->pushBreaks($halfBreakingPower, $electronicsSpy, $statusPanelSpy);
        
        $carController->stop($halfBreakingPower, $electronicsSpyMock, $statusPanelSpyMock);
        
        $this->assertEquals($halfBreakingPower, $electronicsSpy->getBreakingPower());
        $this->assertTrue($statusPanelSpy->speedWasRequested());
        $this->assertEquals(1, $statusPanelSpy->spyOnSpeed());
    }
    
    
    
}