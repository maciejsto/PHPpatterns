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
    
    function goForward(Electronics $electronics)
    {
        $statusPanel = new StatusPanel();
    }
}