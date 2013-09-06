<?php

require_once '../carInterface/StatusPanel.php';

class SpyingStatusPanel extends StatusPanel
{
    private $_speedWasRequested = false;
    private $_currentSpeed = 1;
    
    function getSpeed()
    {
        $this->_speedWasRequested = true;
    }
    function speedWasRequested()
    {
        return $this->_speedWasRequested;
    }
    function spyOnSpeed()
    {
        return $this->_currentSpeed;
    }
    
    
    
}