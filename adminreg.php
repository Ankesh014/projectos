<?php
include("headpage1.php");
?>
 <html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <style>
    
    

    body {
        background-image: url('1.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
    }

    
    }

  </style>
</head>

<body>
  <div class="section"></div>
  <main>
    <center>
     
      <div class="section"></div>

      <h5 style="color:white;">ADMIN REGESTRATION</h5>
      <div class="section"></div>

      <div class="container" id="box">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 180px 0px 180px; border: 1px solid #EEE;">

          <form class="col s12" action="admininfo.php" method="POST">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
            <input class='validate' type='number' name='regno' />
                <label for='REGESTRATION NUMBER'>Enter your Reg. No.</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='name' id='name' />
                <label for='name'>Enter your name</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='number' name='phnum' id='phnum' />
                <label for='Phone number'>Enter your PhoneNo.</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Enter your email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
            </div>



            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='cpassword' id='password' />
                <label for='password'>Confirm password</label>
              </div>

             
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='register' class='col s12 btn btn-large waves-effect indigo'>Register</button>
              </div>
            </center>
          </form><hr>
          <a href="adminlogin.php">LogIn Page</a><hr>
        </div>
      </div>

      
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>