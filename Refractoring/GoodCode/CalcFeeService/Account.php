<?php
//require AutoGetteSetter.php;
require_once 'Service.php';
require_once 'accountInterface.php';

class Account implements accountInterface
{
    //use AutoGetterSetter;
    /**@var int */
    protected $numberOfUsers;
    /**@var Service */
    protected $services = array();     //like acfican swallow Example

    public function setNumberOfUsers($number)
    {
        $this->numberOfUsers = $number;
    }

    public function getNumberOfUsers()
    {
        return $this->numberOfUsers;
    }

    public function getServices()
    {
        return $this->services;
    }

    /**
     * Add to services register
     * @param Service $service
     */
    public function addService(Service $service)
    {
        $this->services[] = $service;
    }
    
    public function accept(AccountVisitor $visitor)
    {
    	//TODO
    	$visitor->visit($this);
    }
    
    public function getBalanceCost()
    {
    	if($this->services == null) return NullService::getNull();
    	foreach ($this->services as $key => $service) {
    		 $tmp[] = array('service'=> $service->getName(),$this->getNumberOfUsers() * $service->getCost());
    	}
    	return $tmp;
    }
    
    

}