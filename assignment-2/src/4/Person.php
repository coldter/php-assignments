<?php
class Person {
	private $name;
	private $address;

	public function __construct($name, $address = '') {
		$this->name = ucfirst($name);
		$this->address = $address;
	}

	public function getName() {
		return $this->name;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
	}

	public function __toString() {
		return "$this->name's address is $this->address";
	}
} 