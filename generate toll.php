<?php
if(isset($_POST['back']))
{
    session_unset();
    echo  "<script type='text/javascript'>alert('TOLL REGESTRATION IS CANCLED');
window.location='adminhome.php';
</script>";
    
}

?>
<html>
<head>

	<style type="text/css">
		 body {
        background-image: url('1.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
    }
    #b1{
    	background-color: #0D8AD5;
    	width:150px;
    	height:35px;

    }#b2{
    	background-color: #FF3235;
    	width:150px;
    	height:35px;

    }

    #cal{
line-style:doted;
border:5px solid black;
margin:10px;
padding:10px;
left:25%;
background-color:white;
width:600px;
height:600px;
position: absolute;
}
	</style>
</head>
<body>
	<div  id="cal"><img src="q10.png"  style="width: 100%;"><hr>
		<form action="tolldatabase.php" method="POST" ><p><CENTER>
			<h3>FILL TOLL FORM</h3></p><Br>
			<br>
			<b>ENTER  DRIVER NAME : <input type="text" name="dname" required>
			<br><br><br>
			ENTER VEHICLE NUMBER : <input type="text" name="vnumber" required>
			<br><br><br>
	
			VEHICLE TYPE :<select name="dropdown" required>
              <option name="dropdown" value="Car">Car</option>
              <option name="dropdown" value="Truck">Truck</option>
              <option name="dropdown" value="Mini">Mini Van</option>
              <option name="dropdown" value="Pickup Truck">Pickup Truck</option>
              <option name="dropdown" value="Bus">Bus</option>
              <option name="dropdown" value="Trackter">Trackter</option>
              </select><br><br><br>
              ONE WAY TOLL :<input type="radio" value="one way" name="way">
              TWO WAY TOLL :<input type="radio" value="two way" name="way">
<br><br><br>
           <button type='submit' name='register' id="b1">Register</button> 
           <button type='submit' name='back' id="b2">cancle</button>
</CENTER> 
		</form>
</div>
</body>
</html>