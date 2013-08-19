<?php

require 'Account.php';


class Main 
{
	protected $_accountVisitor;
	protected $_service;
	protected $_account;
	
	public static function init()
	{
		//TODO
		$this->_service = new ServiceFree();
		$this->_account = new Account();
		$this->_account->addService($service);
		$this->_account->setNumberOfUsers(2);
		$this->_accountVisitor = new AccountVisitor();
		$this->_account->accept($this->_accountVisitor);
	}
	
	public static function run()
	{
		//TODO
		echo $this->_accountVisitor->calcMonthlyCostBalanceForAccount();
	}
	
}//end main


Main::init();
Main::run();