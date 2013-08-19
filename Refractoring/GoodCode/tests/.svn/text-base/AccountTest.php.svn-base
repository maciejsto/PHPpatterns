<?php

require '/opt/lampp/htdocs/Refractoring/GoodCode/CalcFeeService/Account.php';
require '/opt/lampp/htdocs/Refractoring/GoodCode/CalcFeeService/AccountVisitor.php';

class AccountTest extends PHPUnit_Framework_TestCase
{
	
	private $_account;
	private $_accountVisitor;
	private $_service;
	private $_service2;
	
	protected function setUp()
	{
		$this->_account = new Account();
		$this->_service = new ServiceFree();
		$this->_service2 = new ServicePaid();
		$this->_accountVisitor = new AccountVisitor();
		
		
	}
	
	public function testBalanceCost()
	{
		$this->_account->addService($this->_service);
		$this->_account->addService($this->_service2);
		$this->_account->setNumberOfUsers(2);
		$this->_account->accept($this->_accountVisitor);
		
		$result = $this->_accountVisitor->calcMonthlyCostBalanceForAccount();
		
		//asserts
		$this->assertNotNull($result);
		$this->assertInternalType('array', $result);
		$this->assertEquals(2, count($result));
		$this->assertEquals(array('service' => 'freeService',20), $result[0]);
		$this->assertEquals(array('service' => 'paidService',40), $result[1]);
	}
	
	
	public function testGetBalance()
	{
		$this->_account->addService($this->_service);
		$this->_account->addService($this->_service2);
		$result = $this->_account->getBalanceCost();
		$this->assertInternalType('array', $result);
		$this->assertEquals(2, count($result));
	}
	
	public function testAccountHasNoService()
	{
		$this->_account->accept($this->_accountVisitor);
		$result = $this->_accountVisitor->calcMonthlyCostBalanceForAccount();
		//asserts
		$this->assertInternalType('array', $result);
		$this->assertEquals(array('service' => 'nullService','No service provided'), $result);
	}
	
	
	
}