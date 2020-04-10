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
  </style>
</head>

<body>
  <div class="section"></div>
  <main>
    <center>
      
      <div class="section"></div>

      <h5 style="color:white;">ADMIN LOGIN</h5>
      <div class="section"></div>

      <div class="container" >
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 180px 0px 180px; border: 1px solid #EEE;">

          <form class="col s12" action="logininfo.php" method="POST">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='' type='email' name='email'required id='email' />
                <label for='email'>Enter your email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' required name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
								<a class='pink-text' href='#!'><b>Forgot Password?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='submit' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form><hr>
          <a href="adminreg.php">Create account</a>
          <hr>
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