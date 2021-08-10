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