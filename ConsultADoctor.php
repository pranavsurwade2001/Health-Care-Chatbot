<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="front.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

</style>
<body>



<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="front.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="ConsultADoctor.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Consult a Doctor</a>
    <a href="nurse.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Nurses</a>
    <a href="/HealthCareChatbot/FoodOrdring/" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Pharmacy</a>
    <a href="Facilities.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Facilities</a>
    <a href="About.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="Login.php" style="text-decoration:none;">LOGIN</a>
  </div>
  
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>
<div style="background-image: url('background.jpeg');">
<br><br><br>
<link rel="stylesheet" href="registration.css">
<div class="container">
<center><h1>Doctor appointment</h1>
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
<br><br>
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
    echo "<script>alert('Appointment form submitted sucessfully')</script>";
  }
}
?>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>

</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>






