<?php

class Person {
	protected $name;
	protected $dateOfBirth;
	protected $age;

	public function __construct($theName, $dateOfBirth) {
		$this->name = $theName;
		$this->dateOfBirth = $dateOfBirth;
	}
	//__get even gets protected properties
	public function __get($prop) {
		if($prop=="age") {
			//timeNow - dateOfBirth
			$age = (new DateTime())->diff($this->dateOfBirth);
			//print out the years
			return $age->y;
		}
		return $this->$prop;
	}
	public function __set($prop, $value) {
		$this->$prop = $value;
	}
}

$person = new Person("Ben", new DateTime("1985-12-21"));

echo $person->age;



//ask the class for the age property
//The class goes "is the __get method defined?"
//If yes: call the __get method, with the name of the property as the argument.
//$person->__get("age");
//If no __get method: default behaviour


//echo $person->dateOfBirth->format("d-m-Y");




/*
$names = array("Benjamin", "Rafa", "Hassan", "Jade", "Ali", "Rob");
//CAN ONLY GET THE PUBLIC $name PROPERTY
for($i=0; $i<sizeof($names);$i++) {
	$person = new Person($names[$i]);
	echo $person->name = "Test";

}
*/



/*
$names = array("Benjamin", "Rafa", "Hassan", "Jade", "Ali", "Rob");
//CAN ONLY GET THE PUBLIC $name PROPERTY
for($i=0; $i<sizeof($names);$i++) {
	$person = new Person($names[$i]);
	echo $person->name = "Test";
	echo $person->name;

}
*/



/*
class Person {
	protected $name = "Hulla";
	protected $dateOfBirth;
	//public: visible form outside of the class
	public function getName() {
		return $this->name;
	}
}

$person = new Person();
echo $person->getName();
*/