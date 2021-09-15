<?php
class Teacher extends Person {
	private $numCourses = 0;
	private $courses = [];

	public function __construct($name, $address = '', $numCourses) {
		parent::__construct($name, $address);
		$this->numCourses = $numCourses;
	}

	public function addCourse($course) {
		if(in_array($course, $this->courses))
			return false;
		
		array_push($this->courses, $course);
		return true;
	}

	public function removeCourse($course) {
		if(in_array($course, $this->courses)) {
			$key = array_search($course, $this->courses);
			unset($this->courses[$key]);
			return true;
		}
		else
			return false;
	}

	public function __toString() {
		return "Teacher: ".parent::__toString();
	}
}