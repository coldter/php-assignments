<?php
	include_once './Animal.php';
	include_once './Lion.php';
	include_once './Cow.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>THE ZOO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha512-rRQtF4V2wtAvXsou4iUAs2kXHi3Lj9NE7xJR77DE7GHsxgY9RTWy93dzMXgDIG8ToiRTD45VsDNdTiUagOFeZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
				<span class="contact100-form-title">
					THE ZOO
				</span>
			<div class="echo">
				<!------------------------------------------------------------------
																					php
				 ------------------------------------------------------------------>
				<?php
					echo "<strong>::Horse object::</strong>"."<br/>";
					echo "<ol>";
					echo "<li><p>setting a horse object of animal class with new Animal('Equidae', 'grass')...</p></li>";
					$horse = new Animal('Equidae', 'grass');
					echo "<li><p>getFamily()->";
					echo $horse->getFamily()."</p></li>";
					echo "<li><p>getFood()->";
					echo $horse->getFood()."</p></li>";
					echo "<li><p>print_r()-->>".print_r($horse, true)."</p></li>";
					echo "</ol>";

					echo "<hr>";
					
					echo "<strong>::Cow object::</strong>"."<br/>";
					echo "<ol>";
					echo "<li><p>setting a cow object of cow class with new Cow('Bovidae', 'grass')...</p></li>";
					$cow = new Cow('Bovidae', 'grass');
					echo "<li><p>setting owner Mr.x with method setOwner()...</p></li>";
					$cow->setOwner('Mr.X');
					echo "<li><p>getOwner()->";
					echo $cow->getOwner()."</p></li>";
					echo "<li><p>print_r()-->>".print_r($cow, true)."</p></li>";
					echo "</ol>";
					
					echo "<hr>";
					
					echo "<strong>::Lion object::</strong>"."<br/>";
					echo "<ol>";
					echo "<li><p>setting a lion object of lion class with new Lion('Felidae', 'not grass')...</p></li>";
					$lion = new Lion('Felidae', 'not grass');
					echo "<li><p>getFamily()->";
					echo $lion->getFamily()."</p></li>";
					echo "<li><p>getFood()->";
					echo $lion->getFood()."</p></li>";
					echo "<li><p>print_r()-->>".print_r($lion, true)."</p></li>";
					echo "</ol>";
				?>
				<!------------------------------------------------------------------
																					php
				 ------------------------------------------------------------------>
			</div>
		</div>
	</div>



<!--===============================================================================================-->
<!--===============================================================================================-->
	<!-- <script src="../assets/js/main.js"></script> -->

</body>
</html>