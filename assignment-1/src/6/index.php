<!DOCTYPE html>
<html lang="en">
<head>
	<title>OOPs Calculator </title>
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
			<form action="" method="POST" class="contact100-form">
				<span class="contact100-form-title">
					OOPs Calculator
				</span>

				<label class="label-input100" for="fvalue">Enter Your Values*</label>
				<div class="wrap-input100 rs1 validate-input">
					<input id="fvalue" class="input100" type="text" name="fvalue" placeholder="First Value" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" name="svalue" placeholder="Second Value" required>
					<span class="focus-input100"></span>
				</div>
				<div>	
					<label class="label-input100" for="fvalue">Select Your Operation Choose*</label>
					<ul>
							<li>
								<input id="r1" type="radio" name="opp" value="add" checked>
								<label for="r1">Addition (+)</label>
							</li>
							<li>
								<input id="r2" type="radio" name="opp" value="sub">
								<label for="r2">Subtraction (-)</label>
							</li>
							<li>
								<input id="r3" type="radio" name="opp" value="multi">
								<label for="r3">Multiplication (*)</label>
							</li>
							<li>
								<input id="r4" type="radio" name="opp" value="div">
								<label for="r4">Division (/)</label>
							</li>
					</ul>
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
				
				
				class MyCalculator{
					private $a;
					private $b;

					public function __construct($fvalue,$svalue)
					{
						$this->a = $fvalue;						
						$this->b = $svalue;						
					}

					public function add()
					{
						echo "<hr>", $this->a," + ", $this->b," = <b class=\"name\">", $this->a + $this->b, "</b>";
					}

					public function sub()
					{
						echo "<hr>", $this->a," - ", $this->b," = <b class=\"name\">", $this->a - $this->b, "</b>";
					}

					public function multi()
					{
						echo "<hr>", $this->a," * ", $this->b," = <b class=\"name\">", $this->a * $this->b, "</b>";
					}

					public function div()
					{
						try {
							$result = $this->a / $this->b;
							echo "<hr>", $this->a," / ", $this->b," = <b class=\"name\">", $result, "</b>";
						}
						catch(Exception $e){
							echo "<hr> Undefined: Division by zero";
						}
					}
				}

					if(isset($_POST['opp']) && isset($_POST['fvalue']) && isset($_POST['svalue'])){
						
						if(!is_numeric($_POST['fvalue']) || !is_numeric($_POST['svalue'])){
							echo "Enter Numeric Values only";
							exit;
						}
						
						$mycal = new MyCalculator($_POST['fvalue'], $_POST['svalue']);

						switch($_POST['opp']){
						case 'add':
							$mycal->add();
							break;
						case 'sub':
							$mycal->sub();
							break;
						case 'multi':
							$mycal->multi();
							break;
						case 'div':
							$mycal->div();
							break;
						default:
							echo "Hacker-Man";
							break;
						}
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