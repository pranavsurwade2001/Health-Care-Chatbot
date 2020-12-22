<?php
$con = mysqli_connect('127.0.0.1','root','');
	if(!$con)
	{
		echo "$not connected to server";
	}
	if(!mysqli_select_db($con,'eventmanagement'))
	{
		echo "Database not selected";
	}
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gmail = $_POST['gmail'];
	$gender = $_POST['gender'];
	$number = $_POST['number'];
	$password = $_POST['password'];
	$mail = $_POST['mail'];
	$sql = "Insert into registration(fname,lname,gmail,gender,number,password,mail)values('$fname','$lname','$gmail','$gender','$number','$password','$mail')";
	if(!mysqli_query($con,$sql))
	{
		echo "Not inserted";
	}
	else{
		echo "<script>alert('User Registered sucessfully')</script>";
	}
	header("Location: Login.php");
?>