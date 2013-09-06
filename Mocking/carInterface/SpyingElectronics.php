<?php

class SpyingElectronics extends Electronics 
{
    private $_breakingPower;
    
    function pushBreaks($breakingPower)
    {
        $this->_breakingPower = $breakingPower;
    }
    
    function getBreakingPower()
    {
        return $this->_breakingPower;
    }
  
}