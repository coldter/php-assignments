<!DOCTYPE html>
<html lang="en">
<head>
	<title>Factorial Calculator</title>
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
			<form action="" method="GET">
				<span class="contact100-form-title">
					Factorial Calculator
				</span>

				<label class="label-input100" for="number">Enter An Integer</label>
				<div class="wrap-input100">
					<input id="number" min="0" class="input100" type="number" name="number" required="required" placeholder="e.g.  0">
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
				class Factorial{
					private $n;

					public function __construct($arg_num)
					{
						$this->n = $arg_num;
					}
					public function result(){
						$result = 1;
						if($this->n == 0){
							echo "<hr>$this->n! = <b class=\"name\">", $result, "</b>";
						}
						else{
							for($i = $this->n; $i > 0; --$i){
								$result *= $i;
							}

							echo "<hr>$this->n! = <b class=\"name\">", $result, "</b>";
						}
				}
				}

					if(isset($_GET['number']) && $_GET['number'] >= 0){
						$obj = new Factorial($_GET['number']);

						$obj->result();
					}elseif(isset($_GET['number']) && $_GET['number'] < 0){
						echo  "<hr>",$_GET['number'],"! = Undefined";
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
