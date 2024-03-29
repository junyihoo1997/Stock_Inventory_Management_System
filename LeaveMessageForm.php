
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Leave Us Message</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="imagesContact/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorContact/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontsContact/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorContact/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorContact/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorContact/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorContact/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorContact/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cssContact/util.css">
	<link rel="stylesheet" type="text/css" href="cssContact/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="includes2/LeaveMessageSQL.php" method="POST">
				<span class="contact100-form-title">
					Leave A Message
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Needed Services</span>
					<div>
						<select class="selection-2" name="service">
							<option>Choose Services</option>
							<option>Hardware Repair</option>
							<option>Refurbish Hardware Repairing</option>
							<option>Hardware Diagnose</option>
							<option>Warranty Services</option>
							<option>Online Services</option>
							<option>Others</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<!--<div class="wrap-input100 input100-select">
					<span class="label-input100">Budget</span>
					<div>
						<select class="selection-2" name="budget">
							<option>Select Budget</option>
							<option>RM 1500</option>
							<option>RM 2000</option>
							<option>RM 2500</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>-->

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
						
					</div>
				</div>
				<br>
				<span class="label-input100">We Will Respond To You ASAP Once We Received Your Message</span>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendorContact/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorContact/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorContact/bootstrap/js/popper.js"></script>
	<script src="vendorContact/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorContact/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendorContact/daterangepicker/moment.min.js"></script>
	<script src="vendorContact/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendorContact/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="jsContact/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
