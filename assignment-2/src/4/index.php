<?php
include_once './Person.php';
include_once './Student.php';
include_once './Teacher.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title Page-->
	<title>Ex.4</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/>

	<!-- Font special for pages-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Main CSS-->
	<link href="../assets/css/4.css" rel="stylesheet" media="all">
</head>

<body>
	<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
		<div class="wrapper wrapper--w680">
			<div class="card card-4">
				<div class="card-body">
					<h2 class="title">Ex.4</h2>
						<?php
							echo "<h4>::Person::</h4>";
							echo "<ol>";
					
							echo "<li><p>creating a person instance with</p></li>";
							$person = new Person('magan', '317, Sarvottam Complex, Opp. Panchnath Temple,Limbda Chowk');
							echo "<li><p>getName()->".$person->getName()."</p></li>";
							echo "<li><p>getAddress()->".$person->getAddress()."</p></li>";
							echo "<li><p>toString()->".$person."</p></li>";

							echo "</ol>";
							echo "<hr />";

							echo "<h4>::Student::</h4>";
							echo "<ol>";
					
							echo "<li><p>creating a student instance</p></li>";
							$student = new Student('chagan', '20/9, Shreeji Estate, Veraval Main Rd, Opp Sumangal Casting, SIDC Rd, Veraval', 69);
							echo "<li><p>adding course grade</p></li>";
							$student->addCourseGrade('a', 100);
							$student->addCourseGrade('b', 75);
							$student->addCourseGrade('c', 50);
							echo "<li><p>printGrade()-> </p></li>";
							$student->printGrade();
							echo "<li><p>toString()->".$student."</p></li>";

							echo "</ol>";
							echo "<hr />";

							echo "<h4>::Teacher::</h4>";
							echo "<ol>";
					
							echo "<li><p>creating a teacher instance</p></li>";
							$teacher = new Teacher('lagan', 'Behind Rajkamal Petrol Pump, Off Gondal Road, Punitnagar Road, Kotharia', 420);
							echo "<li><p>addCourse()->";
							var_dump( $teacher->addCourse('a'));
							var_dump( $teacher->addCourse('a'));
							var_dump( $teacher->addCourse('b'));
							var_dump( $teacher->addCourse('c'));
							echo "</p></li>";
							echo "<li><p>removeCourse()->";
							var_dump( $teacher->removeCourse('a'));
							var_dump( $teacher->removeCourse('a'));
							var_dump( $teacher->removeCourse('b'));
							var_dump( $teacher->removeCourse('b'));
							echo "</p></li>";
							echo "<li><p>toString()->".$teacher."</p></li>";

							echo "</ol>";
						?>
				</div>
			</div>
		</div>
		<div style="margin: 10px;"></div>
		<div class="wrapper wrapper--w680" style="display: flex; justify-content: space-between;">
			<button class="bn39 gistbn"><span class="bn39span">view source</span></button>
			<button class="bn39"><a href="https://3v4l.org/lgFlv" target="__black"><span class="bn39span">live editor(eval)</span></a></button>
		</div>
		<div style="margin: 10px;"></div>
		<div class="wrapper wrapper--w680 gist" style="display: none;">
			<script src="https://gist.github.com/coldter/4d8c9267cc9c4170e438f624020d001f.js"></script>
		</div>
	</div>
	<!-- 
	----------------------------------------------------------------------------------------------------------------------------------------------------
 -->

	<script src="../assets/js/main.js"></script>

</body>

</html>