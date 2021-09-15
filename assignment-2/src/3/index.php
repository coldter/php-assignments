<?php
	include_once './bankAcc.php';
	include_once './checkingAcc.php';
	include_once './savingAcc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
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
				<span class="contact100-form-title">
					BANK
				</span>
			<div class="echo">
				<!------------------------------------------------------------------
																					php
				 ------------------------------------------------------------------>
				<?php
					echo "<ol>";
					
					echo "<li><p>\$sa = new SavingAccount('12121424', 2000, 2.5);</p></li>";
					$sa = new SavingAccount('12121424', 2000, 2.5);
					echo "<li><p>getting acc. balance ::</p></li>";
						echo "<ul>";
						echo "<li><p>Bank Balance is $".$sa->getBalance()."</p></li>";
						echo "</ul>";
					echo "<li><p>Adding interest...</p></li>";
					$sa->addInterest();
						echo "<ul>";
						echo "<li><p>After intrest Balance is $".$sa->getBalance()."</p></li>";
						echo "</ul>";
					echo "<li><p>\$ch = new CheckingAccount('12121424', \$sa->getBalance(), 100);</p></li>";
					$ch = new CheckingAccount('12121424', $sa->getBalance(), 100);
					echo "<li><p>Deducting fee...</p></li>";
					echo $ch->deductFee();
						echo "<ul>";
						echo "<li><p>After feet deduct Balance is $".$ch->getBalance()."</p></li>";
						echo "</ul>";

					echo "</ol>";
				?>
				<!------------------------------------------------------------------
																					php
				 ------------------------------------------------------------------>
			</div>
		</div>
	</div>



<!--===============================================================================================-->
<!--===============================================================================================-->
	<!-- <script src="../assets/js/main.js"></script> -->

</body>
</html>