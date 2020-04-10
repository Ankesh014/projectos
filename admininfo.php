<?php
if(isset($_POST['register']))
{
	include_once "DATABASE.php";
	$Regno=$_POST['regno'];
	$Name=$_POST['name'];
	$Phnum=$_POST['phnum'];
	$Email=$_POST['email'];
	$Pass=$_POST['password'];

	$c="insert into adminregistration(REGNO,NAME,PHONENO,EMAIL,PASSWORD)
	values('$Regno','$Name','$Phnum','$Email','$Pass')";
	$conn->query($c);
	
	if($conn->query($c))
	{
		header('location:adminlogin.php');
		
		
	}
	else{
		echo "string $conn->error";
	}
}
?>