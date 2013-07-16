<?php
//require AutoGetteSetter.php;
require_once 'Service.php';

class Account
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

}