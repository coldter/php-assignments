<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hello</title>
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
			<form action="" method="GET">
				<span class="contact100-form-title">
					Hello Message
				</span>

				<label class="label-input100" for="name">Enter Your Name</label>
				<div class="wrap-input100">
					<input id="name" class="input100" type="text" name="name" required="required" placeholder="e.g.  Kuldeep">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						<span>
							Submit
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
				class Hello{
					private $name;

					public function __construct($arg_name)
					{
						$this->name = $arg_name;
					}
					public function print_msg(){
						echo "Hello👋  All, I'm <b class=\"name\">", $this->name, "</b>";
					}
				}

					if(isset($_GET['name']) && !empty($_GET['name'])){
						$obj = new Hello($_GET['name']);

						$obj->print_msg();
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
