<!DOCTYPE html>
<html lang="en">
<head>
	<title>DateInterva</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
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
			<form action="" method="POST">
				<span class="contact100-form-title">
				Date-Interva Calculator
				</span>

				<label class="label-input100" for="date1">Enter First Date</label>
				<div class="wrap-input100">
					<input id="date1" class="input100" type="date" name="date1" required="required" placeholder="mm-dd-yyyy">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="date2">Enter Second Date</label>
				<div class="wrap-input100">
					<input id="date2" class="input100" type="date" name="date2" required="required" placeholder="mm-dd-yyyy">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						<span>
							Calculate
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
					</button>
				</div>
			</form>
			<div class="echo">
				<!------------------------------------------------------------------
																	php
				 ------------------------------------------------------------------>
				<?php

					if(!empty($_POST['date1']) && !empty($_POST['date2'])){
						$date1 = new DateTime($_POST['date1']);
						$date2 = new DateTime($_POST['date2']);

						$interval = $date1->diff($date2);

						echo "<hr> Difference:  <b class=\"name\">", $interval->y, "</b> years, <b class=\"name\">", $interval->m, "</b> months, <b class=\"name\">", $interval->d, "</b> days.";
					}
				?>
				<!------------------------------------------------------------------
																	php
				 ------------------------------------------------------------------>
			</div>
		</div>
	</div>



<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="../assets/js/main.js"></script>

</body>
</html>
