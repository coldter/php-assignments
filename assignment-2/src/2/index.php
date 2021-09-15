<?php
	include_once './classes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-MAIL</title>
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
					E-MAIL
				</span>
			<div class="echo">
				<!------------------------------------------------------------------
																					php
				 ------------------------------------------------------------------>
				<?php
					echo "<ol>";
					
					echo "<li><p>\$email = new EmailAddress()</p></li>";
					$email = new EmailAddress();
					echo "<li><p>\$email->setEmailAddress('trueline.chirag@gmail.com')</p></li>";
					$email->setEmailAddress('trueline.chirag@gmail.com');
					echo "<li><p>\$address = new EmailAddressDisplayAdapter(\$email)</p></li>";
					$address = new EmailAddressDisplayAdapter($email);
					echo "<li><p>printing \$address->getAddressType()::</p></li>";
						echo "<ul>";
						echo "<li><p>".$address->getAddressType()."</p></li>";
						echo "</ul>";
					echo "<li><p>printing \$address->getAddressText()::</p></li>";
						echo "<ul>";
						echo "<li><p>".$address->getAddressText()."</p></li>";
						echo "</ul>";
					
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