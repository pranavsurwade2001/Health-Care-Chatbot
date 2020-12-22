<?php
   $conn = mysqli_connect("localhost", "root", "","eventmanagement");
   if(isset($_POST["submit"]))
   {
   	  $gmail = $_POST["gmail"];
   	  $password = $_POST["password"];

   	  $sql = mysqli_query($conn, "SELECT count(*) as total from registration where gmail = '".$gmail."' and password = '".$password."'") or die(mysqli_error($conn));

   	  $rw = mysqli_fetch_array($sql);
   	  if($rw['total'] > 0){
   	  	echo "<script> alert('Login Successfully')</script>";
   	  	 header("Location: front.php");
   	  }
   	  else{
   	  	echo "<script> alert('Wrong Password')</script>";   	  	
   	  }
   }
   
?>