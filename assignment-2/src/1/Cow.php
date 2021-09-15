<?php
class Cow extends Animal {
	private $owner;

	public function __construct($family = '', $food = '')
	{
		parent::__construct($family, $food);
	}

	public function setOwner($owner)
	{
		$this->owner = $owner;
	}

	public function getOwner()
	{
		return $this->owner;
	}
}