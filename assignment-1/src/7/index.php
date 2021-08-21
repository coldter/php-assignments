<!DOCTYPE html>
<html lang="en">
<head>
	<title>program from class diagram</title>
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
			<form action="" method="GET" class="contact100-form">
				<span class="contact100-form-title" style="padding-bottom: 1px;">
					Area Of Circle
				</span>
			
				<div>
					<img src="../assets/images/page-1.png" alt="class diagram">
				</div>
			
				<label class="label-input100" for="val">Enter Your Value Of Radius</label>
				<div class="wrap-input100">
					<input id="val" min="0" class="input100" type="txt" name="val" required="required" placeholder="e.g.  1">
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
				
				set_error_handler(function () {
					throw new Exception('BOOM!');
				});
				
				$PI = 3.14;
				
				class MyCircle{
					private $radius;
				
					public function __construct($radius = 1){
						$this->radius = $radius;
					}

					public function __destruct(){}
					
					public function getRadius(){
						return $this->radius;
					}

					public function setRadius($radius){
						$this->radius = $radius;
					}

					public function getArea(){
						return $GLOBALS['PI'] * $this->radius * $this->radius;
					}

					public function __toString()
					{
						return "$this->radius";
					}
				}
					if(isset($_GET['val'])){

						if(!is_numeric($_GET['val']) || $_GET['val'] < 0){
							echo "The value of r should be positive";
							exit;
						}
						
						$circle = new MyCircle();

						$circle->setRadius($_GET['val']);

						echo "<hr>For Radius = $circle <br/> Area ≈ <b class=\"name\">", $circle->getArea(), "</b>";
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