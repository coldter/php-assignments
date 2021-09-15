<?php
class BankAccount {
	private $accountNumber;
	public $totalBalance;

	public function __construct($accNo, $initialAmount = 0) {
		$this->accountNumber = $accNo;
		$this->totalBalance = $initialAmount;
	}

	public function deposit($amount) {
		$this->totalBalance += $amount;
	}

	public function withdraw($amount) {
		if($amount > $this->totalBalance)
			return "insufficient Balance";
		
		$this->totalBalance -= $amount;
	}

	public function getBalance() {
		return $this->totalBalance;
	}
}