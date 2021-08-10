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


	<div class="container-contact100" style="background: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
		<div class="wrap-contact100">
			<form action="" method="POST" class="contact100-form">
				<span class="contact100-form-title">
					Area of &nbsp;<i class="zmdi zmdi-aspect-ratio-alt"></i>,&nbsp; <i class="zmdi zmdi-triangle-up"></i>&nbsp; and&nbsp; <i class="zmdi zmdi-crop-landscape"></i>
				</span>

					<div id="square">
						<div id="hide-in">
							<label class="label-input100" for="side">Enter Side Size</label>
							<div class="wrap-input100">
								<input id="side" min="0" class="input100" type="txt" name="side" placeholder="side" onkeyup="squ_ajax(this.value)">
								<span class="focus-input100"></span>
							</div>
						</div>
					</div>

					<div id="triangle">
						<div id="hide-in">
							<label class="label-input100" for="base">Enter Base and Height</label>
							<div class="wrap-input100 rs1 validate-input">
								<input id="base" class="input100" type="text" name="base" placeholder="base" onkeyup="tri_ajax()">
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-input100 rs1 validate-input">
								<input id="height" class="input100" type="text" name="height" placeholder="height" onkeyup="tri_ajax()">
								<span class="focus-input100"></span>
							</div>
						</div>
					</div>

					<div id="rectangle">
						<div id="hide-in">
							<label class="label-input100" for="width">Enter Width and Length</label>
							<div class="wrap-input100 rs1 validate-input">
								<input id="width" class="input100" type="text" name="width" placeholder="width" onkeyup="rec_ajax()">
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-input100 rs1 validate-input">
								<input id="length" class="input100" type="text" name="length" placeholder="length" onkeyup="rec_ajax()">
								<span class="focus-input100"></span>
							</div>
						</div>
					</div>

				<div>	
					<label class="label-input100" for="fvalue">Select Shape Choose*</label>
					<ul>
							<li>
								<input id="r1" type="radio" name="opp" value="squ" onclick="show_squ()">
								<label for="r1">Square</label>
							</li>
							<li>
								<input id="r2" type="radio" name="opp" value="tri" onclick="show_tri()">
								<label for="r2">Triangle</label>
							</li>
							<li>
								<input id="r3" type="radio" name="opp" value="rec" onclick="show_rec()">
								<label for="r3">Rectangle</label>
							</li>
					</ul>
				</div>
			</form>
			<div class="echo">
				<span id="echospan"></span>
			</div>
		</div>
	</div>



<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="../assets/js/main.js"></script>
	<script src="../assets/js/8to10.js"></script>

</body>
</html>