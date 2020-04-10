<?php

if(isset($_POST['submit']))
{ session_start();
  include_once "DATABASE.php";
  $Email=$_POST['email'];
  $Pass=$_POST['password'];

  $q= " SELECT * from adminregistration WHERE name EMAIL ='$Email' AND PASSWORD ='&Pass' ";
  $result=mysqli_query($conn, 'SELECT * from adminregistration');
  $row=mysqli_fetch_array($result);

  if($row['EMAIL'] == $Email && $row['PASSWORD'] == $Pass)
  {
  	echo "successfull";
    header('location:userhome.php');
  }
else{
		header('location:userhome.php');
}

}
?>