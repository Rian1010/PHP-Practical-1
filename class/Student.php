<?php
include_once "Person.php";
class Student extends Person {
	protected $classList = array();
	public function __construct($name, $dateOfBirth, $classList) {
		$this->classList = $classList;
		parent::__construct($name, $dateOfBirth);
	}
	public function __get($prop) {
		if($prop=="classList") {
			return implode(" | ", $this->classList);
		}

		return parent::__get("prop");
	}
}

$student = new Student("Bulla", new DateTime("1985-12-21"), array("CS101", "CS105", "WD202"));

echo "<br>";
echo $student->classList;