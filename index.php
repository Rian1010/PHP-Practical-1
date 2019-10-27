<!DOCTYPE html>
<html>
<head>
	<title>PHP Class Demo</title>
</head>
<body>
	<?php
		include_once "class/Person.php";
		include_once "class/Student.php";

		$student = new Student("Bulla", new DateTime("1985-12-21"), array("CS101", "CS105", "WD202"));
		echo "<p>The student's name is: ";
		echo $person->name;
		echo "</p><p>The student's age is: ";
		echo $person->age;
		echo "</p><p>The student's classList is: ";
		echo $student->classList;
		echo "</p>";
	?>
</body>
</html>