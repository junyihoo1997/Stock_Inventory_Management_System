<?php 
include_once 'login.php';

$name = $_POST['name'];
$email = $_POST['email'];
$services = $_POST['service'];
$message = $_POST['message'];

$sql = "INSERT INTO leavemessage(Name, Email, Services, Message)VALUES('$name','$email','$services','$message');";
mysqli_query($conn,$sql);
header("Location:../LeaveMessageForm.php?LeaveMessageSQL=success");
