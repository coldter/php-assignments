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
	<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animsition/css/animsition.min.css">
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
