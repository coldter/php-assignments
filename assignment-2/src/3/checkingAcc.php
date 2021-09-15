<?php
class CheckingAccount extends BankAccount {
	private $fee;

	public function __construct($accNo, $initialAmount = 0, $fee) {
		parent::__construct($accNo, $initialAmount);
		$this->fee = $fee;
	}

	public function deductFee() {
		parent::withdraw($this->fee);
	}
}