<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sorting of An Array</title>
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
					Sort An Array
				</span>

				<label style="font-size: 15px;" class="label-input100" for="arr">Enter Your Array Using Comma(,) As Separator</label>
				<div class="wrap-input100">
					<input id="arr" min="0" class="input100" type="text" name="arr" required="required" placeholder="e.g.  1,2,3,4,5">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						<span>
							Sort
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
				class SortArr{
					private $array;

					public function __construct($arr)
					{
						$this->array = $arr;
						$this->doSort();
					}
					private function doSort(){
						sort($this->array);
					}
					public function doPrint(){
						foreach ($this->array as $i => $element){
							if($i === array_key_first($this->array)){
								echo "<hr>Sort:: <b class=\"name\">", $element;
							}
							elseif($i === array_key_first($this->array)){
								echo ",", $element, "</b>";
							}
							else{
								echo ",", $element;
							}
						}
					}
				}

					if(isset($_POST['arr']) && !empty($_POST['arr'])){
						$arr = explode(',', $_POST['arr']);

						$a = new SortArr($arr);
						$a->doPrint();
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
