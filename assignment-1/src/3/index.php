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
	<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/daterangepicker/daterangepicker.css">
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
