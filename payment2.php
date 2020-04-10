<?php 
if(isset($_POST['pay']))
{
    session_start();
    echo  "<script type='text/javascript'>alert('PAYMENT COMPLETED..! TOLL REGESTERED..');
window.location='userhome.php';
</script>";
    
}




if(isset($_POST['cancle']))
{
    session_unset();
    echo  "<script type='text/javascript'>alert('COMPLETE YOUR PAYMENT');
window.location='userhome.php';
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

    }
    #b2{
        background-color:green;
        width:150px;
        height:35px;

    }#b3{
    	background-color: #FF3235;
    	width:150px;
    	height:35px;

    }

    #cal{
line-style:doted;
border:5px solid black;
margin:10px;
padding:10px;
left:20%;
background-color:white;
width:800px;
height:800px;
position: absolute;
}
	</style>
</head>
<body>
	<div  id="cal"><img src="q10.png"  style="width: 100%;"><hr>

		<form action="payment.php" method="POST" ><p><CENTER>
			<h2>DEBIT/CRADIT CARD PAYMENT</h2></p><Br>
			<br>
			<b>ENTER  CARD HOLDER NAME : <input type="TEXT" name="cname">
			<br><br><br>
			ENTER CARD NUMBER : <input type="NUMBER" name="cnumber">
			<br><br><br>
			EXPIRY MONTH :<input type="number" name="month">   YEAR :<input type="number" name="year"><br><br><br>
			ENTER CVV :<input type="PASSWORD" name="cvv">
			<br><br><br>
			ENTER PIN :<input type="PASSWORD" name="pin">
			<br><br><br>
             
            <br>
           <button type='submit' name='pay' id="b1">PAY</button> 
           <button type='submit' name='cancle' id="b3">CANCLE</button>
</CENTER> 
		</form>

</body>
</html>