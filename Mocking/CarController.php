<?php
class CarController
{
    function getReadyToGo(Engine $engine, GearBox $gearbox, Electronics $electronics, Lights $lights)
    {
        $engine->start();
        $gearbox->shift('N');
        $electronics->turnOn($lights);
        
        return true;
    }
    
    function goForward(Electronics $electronics, StatusPanel $statusPanel = null)
    {
        $statusPanel = $statusPanel ? : new StatusPanel();
        if($statusPanel->engineIsRunning() && $statusPanel->thereIsEnaughFuel())
        {
            $electronics->accelerate();
        }
        return $statusPanel->engineIsRunning();
    }
    
    
    function pushBreaks($breakingPower, Electronics $electronics, StatusPanel $statusPanel = null)
    {
        $statusPanel = $statusPanel ? : new StatusPanel();
        $electronics->pushBreaks($breakingPower);
        $statusPanel->getSpeed();
    }
    
    function stop($breakingPower, Electronics $electronics, StatusPanel $statusPanel = null)
    {
        $statusPanel = $statusPanel ? : new StatusPanel();
        $electronics->pushBreaks($breakingPower);
        $statusPanel->thereIsEnaughFuel();
        if($statusPanel->getSpeed()) $this->stop($breakingPower, $electronics, $statusPanel);
    }
    
}