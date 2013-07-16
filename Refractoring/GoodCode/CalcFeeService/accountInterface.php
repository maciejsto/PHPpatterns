<?php

interface accountInterface 
{

	//TODO
	public function getServices();
	public function getNumberOfUsers();
	public function accept(AccountVisitor $visitor);
	
	
}