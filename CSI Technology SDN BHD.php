<?php

include_once "login.php";

?>

<!--<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
</style>
</head>
<body>
<div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
--> <!-- Error Message -->
<!--<span><?php //echo $error; ?></span>
</body>
</html>-->



<!--<!DOCTYPE html>
<html>
<head>
	<title>CSI Technology SDN BHD</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<div class= "login">
		<form method="post" action="">
			<p>
				<label>Username:</label>
				<input type="text" id="username" name="username" />
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="password" name="password"/>
			</p>
			<p>
			<input type="submit" value="LOGIN" id="btn"/>
		</p>

		<?php 
		/*echo $_POST['username']; 

		
			 	 		//Define $user and $pass
			 	 		$user=$_POST['username'];
			 	 		$pass=$_POST['password'];
			 	 		$sql = "SELECT * FROM loginform WHERE USERNAME = '$user' AND PASSWORD = '$pass';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck>0){
			echo "You're logged in";
			
		}else{
			echo "Please enter correct information";
		}
			 	 	*/
			 	 ?>

		</form>
	</div>
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Log In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images1/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor1/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images1/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="username" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" id="SignIn" type="submit">
						Sign In
					</button>
				</div>

				<!--<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="images1/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>

				<div class="text-center">
					<a href="#" class="txt2 hov1">
						Sign Up
					</a>
				</div>-->
					<?php 	
			 	 		//Define $user and $pass
			 	 		$user=$_POST['username'];
			 	 		$pass=$_POST['password'];
			 	 		$sql = "SELECT * FROM loginform WHERE USERNAME = '$user' AND PASSWORD = '$pass';";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if($resultCheck>0){
							//echo '<a href="CSITechInventoryMainPage.php" target="_self">New</a>';
							//header("location:CSITechInventoryMainPage.php");
							echo '<script type="text/javascript">location.href = "CSITechInventoryMainPage.php";</script>';
			
						}else{
							echo "Please enter correct information";
						}
					
			 	 	
			 	 ?>
				
			</form>
<!--<div class= "login">
		<form method="post" action="">
			<p>
				<label>Username:</label>
				<input type="text" id="username" name="username" />
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="password" name="password"/>
			</p>
			<p>
			<input type="submit" value="LOGIN" id="btn"/>
		</p>

		

		</form>
	</div>
			
		</div>
	</div>-->
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/bootstrap/js/popper.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/daterangepicker/moment.min.js"></script>
	<script src="vendor1/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js1/main.js"></script>

</body>
</html>