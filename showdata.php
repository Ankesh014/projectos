<?php
include("headpage2.php");



?>
 <html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <style>
    #h{
      background:gray;
      text-decoration-color: white;
      text-align: center;
    }

   
  </style>
</head>
<body>
<div class="container">
  <div class="col-lg-12 m-auto"><h2 id="h">VEHICLE TOLL INFORMATIO</h2>
  <table class="table table-stripped">
    <tr>
      <td>ID</td>
      <td>DRIVER NAME</td>
      <td>VHEICLE NUMBER</td>
      <td>VHEICLE TYPE</td>
      <td>ROUTE</td>
      <td>TIME</td>
    </tr>
    <?php
       include_once "DATABASE.php";
       $q= "select * from TOLLFORM";
       $res=$conn->query($q);
       while ($row=$res->fetch_assoc())
       {
    ?><tr>
      <td><?php echo $row['ID']; ?></td>
      <td><?php echo $row['DRIVER_NAME']; ?></td>
      <td><?php echo $row['VEHICLE_NUMBER']; ?></td>
      <td><?php echo $row['VEHICLE_TYPE']; ?></td>
      <td><?php echo $row['WAYS']; ?></td>
      <td><?php echo $row['TIME']; ?></td>
    </tr>
  <?php } ?>
  </table>    
  </div>
</div>
</body>
</html>