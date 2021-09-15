<?php
class EmailAddress {
	private $emailAddress;

	public function getEmailAddress() {
		return $this->emailAddress;
	}

	public function setEmailAddress($mail) {
		$this->emailAddress = $mail;
	}
}

class AddressDisplay {
	private $addressType;
	private $addressText;

	public function getAddressType() {
		return $this->addressType;
	}

	public function setAddressType($type) {
		$this->addressType = $type;
	}

	public function getAddressText() {
		return $this->addressText;
	}

	public function setAddressText($mail) {
		$this->addressText = $mail;
	}
}

class EmailAddressDisplayAdapter extends AddressDisplay {

	public function __construct($mail) {
		$this->setAddressType('Email');
		$this->setAddressText($mail->getEmailAddress());
	}
}