<?php
class Student extends Person {
	private $numCourse = 0;
	private $courses = [];
	private $grades = [];

	public function __construct($name, $address = '', $numCourse = 0) {
		parent::__construct($name, $address);
		$this->numCourse = $numCourse;
	}

	public function addCourseGrade($course, $grade) {
		array_push($this->courses, $course);
		array_push($this->grades, $grade);
	}

	public function printGrade() {
		foreach($this->courses as $index => $course) {
			echo "$course = ".$this->grades[$index]." <br />";
		}
	}

	public function getAverageGrade() {
		return array_sum($this->grades) / count($this->grades);
	}

	public function __toString() {
		return "Student: ".parent::__toString();
	}
}