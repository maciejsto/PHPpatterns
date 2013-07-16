<?php


abstract class Service
{
       //here you have code about service specific things
       //service free, service
       abstract function getCost();
       abstract function getName();
}

class ServiceFree extends Service
{
    //you get acces to Meetings :))
    public function getCost()
    {
    	return 10;
    }
    public function getName()
    {
    	return "freeService";
    }
}

class ServicePaid extends Service
{
    //+200 do zajebistosci
    public function getCost()
    {
    	return 20;
    }
    public function getName()
    {
    	return "paidService";
    }
    
}

class NullService extends Service
{
	public static function getNull()
	{
		return array('service' => self::getName(),"No service provided");
	}
	public function getCost()
	{
		return null;
	}
	public function getName()
	{
		return "nullService";
	}
	
}