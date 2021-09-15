<?php
class SavingAccount extends BankAccount {
	private $interestRate;

	public function __construct($accNo, $initialAmount = 0, $rate = 1.0) {
		parent::__construct($accNo, $initialAmount);
		$this->interestRate = $rate;
	}

	public function addInterest() {
		$amount = (parent::getBalance() * $this->interestRate) / 100;
		parent::deposit($amount);
	}
}