<?php
if(isset($_POST['register']))
{
	include_once "DATABASE.php";
	$Name=$_POST['dname'];
	$Vnum=$_POST['vnumber'];
	$Vtype=$_POST['dropdown'];
	$Way=$_POST['way'];

	$c="insert into TOLLFORM(DRIVER_NAME,VEHICLE_NUMBER,VEHICLE_TYPE,WAYS)
	values('$Name','$Vnum','$Vtype','$Way')";
	$conn->query($c);
	
	if($conn->query($c))
	{
		echo  "<script type='text/javascript'>alert('COMPLETE YOUR PAYMENT');
window.location='payment2.php';
</script>";

		
		
	}
	else{
		echo "string $conn->error";
	}
}
if(isset($_POST['back']))
{
    session_unset();
    echo  "<script type='text/javascript'>alert('TOLL REGESTRATION IS CANCLED');
window.location='userhome.php';
</script>";
    
}
?>