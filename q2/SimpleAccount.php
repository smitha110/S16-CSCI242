<?php

class SimpleAccount
{

	/* BEGIN ANSWER SECTION */
	public $balance = 0.00;
	
	public function __construct()	//Constructor for SimpleAccount
	{
		
	}
	
	public function deposit($amount)	//Add the amount to the balance
	{
		$this->balance = $balance + $amount;
	}
	
	public function withdrawal($amount)	//Subtract the amount from the balance
	{
		$this->balance = $amount - $balance;
	}
	
	public function getBalance()	//Return the balance of the account
	{
		return $this->balance;
	}
	/* END ANSWER SECTION */

}
