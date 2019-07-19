<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "csi";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

		


		
	

/*

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost:3308", "root", "","csi");
 //Selecting Database
 $db = mysqli_select_db($conn, "csi");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM loginform WHERE pass='$pass' AND user='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 $error = "Username of Password is correct"; // Redirecting to other page
 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}*/

/* $error=''; //Variable to store error message
if(isset($_POST['submit'])){
	if(empty($_POST['username'])|| empty($_POST['password'])){
		$error = "Username or Password is Invalid";
	}
	else
	{
		//define $user and $pass
		$user = $_POST['username'];
		$pass = $_POST['password'];


		 //Establish connection with server by passing server name, user id and pass as a parameter
		$conn = mysqli_connect("127.0.0.1:3308","root","");

		//selecting database
		$db = mysqli_select_db($conn,"csi");

		//sql query to fetch information of registered user and finds user match.
		$query = mysqli_query($conn, "SELECT * FROM loginform WHERE password='$pass' AND username='$user'");

		$rows = mysqli_num_rows($query);
		if($rows==1){
			echo "Login success! Welcome ";

		}
		else {
			$error= "username or password is invalid";
		}
		mysqli_close($conn);

	}
}*/











/*
//Get values pass from form in CSI Technology SDN BHD.php file
$username = $_POST['username'];
$password = $_POST['password'];

// to prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);

//connect to the server and select database
mysqli_connect("localhost","root","");
mysqli_select_db("csi");

//Query the database for user
$result = mysqli_query("SELECT * FROM loginform WHERE username= '$username' and password = '$password") or die ("Failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
	echo "Login success! Welcome ".$row['username'];
} else{
	echo"Failed to login";
}*/










/*$host="127.0.0.1:3308";
$user="root";
$password="";
$db="csi";

mysqli_connect($host, $user, $password,$db);
mysqli_select_db($host, $db);

if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from loginform where USERNAME='".$uname."' AND PASSWORD='".$password."'limit 1";

	$result=mysqli_query($sql);
	 if(mysqli_num_rows($result)==1){
	 	echo"You Have Successfully Logged in";
	 	exit();
	 }
	 else{
	 	echo"You Have Entered Incorrect Password";
	 	exit();
	 }
}*/
?>