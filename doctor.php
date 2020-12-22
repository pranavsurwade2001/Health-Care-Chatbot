<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Doctor</title>
</head>
<link rel="stylesheet" href="registration.css">
<div class="container">
<center><h1>Doctor</h1>
    <p>Please fill in this form to get appointment.</p>
<form name="doctor" action="#" method="post"  >
<label for="name"><b>Name:-</b></label><br>
<input type="text" name="name"    placeholder="Name" autocomplete="off" required="required">
<br>
<label for="number"><b>Phone Number:-</b></label><br>
<input type="tel"  name="number" placeholder="Phone Number" autocomplete="off" pattern="[0-9]{10}" maxlength="10" required="required" autofocus="autofocus" />
<br>
<label for="gender"><b>Gender:-</b><br>
<input type="text" name="gender"  autocomplete="off" autofocus="autofocus" placeholder="Gender" />
<br>
<label for="prob"><b>Problem Description:-</b></label><br>
<input type="text" name="prob"  placeholder="Problem" autocomplete="off" autofocus="autofocus">
<br>
<input type="submit" class="registerbtn" value="Submit" name="submit">
<input type="reset"  class="registerbtn" name="reset" value="Reset" />

</form>
</div>
 <div class="container signin">
    <center><p>Already have an account? <a href="login.php">Sign in</a>.</p></center>
  </div>
<body>
</body>
<?php
if(isset($_POST['submit'])){
$con = mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo "$not connected to server";
	}
	if(!mysqli_select_db($con,'eventmanagement'))
	{
		echo "Database not selected";
	}
	$name = $_POST['name'];
	$number = $_POST['number'];
	$gender = $_POST['gender'];
	$prob = $_POST['prob'];
	$sql = "insert into doctor(name,number,gender,prob) values('$name','$number','$gender','$prob')";
	if(!mysqli_query($con,$sql))
	{
		echo "Not inserted";
	}
	else{
		echo "";
	}
}
?>
</html>