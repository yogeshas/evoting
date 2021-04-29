<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHOTO VERIFICATION</title>
    <link rel="stylesheet" href="w3css-master/w3.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
        button
        {
            width: 100px;
            color: white;
            background-color: black;
        }
    </style>
</head>
<body>
  

  <div class="w3-bar w3-black  w3-text-white w3-card-4">
        <a href="" class="w3-bar-item" style="text-decoration: none;margin-left: 600px;font-size: 20px;font-weight: bold;text-transform: uppercase;">WELCOME 
         <?php echo $_SESSION['SESS_NAME']; ?> TO E-VOTING  </a>
    </div>
    <br><br>
    
  
  <h1 style="text-align: center;">YOUR PHOTO IS NOT BEEN VERIFIED PLEASE WAIT FOR THE VERIFICATION </h1>
  <h5 style="text-align: center;margin-top: 100px;">IN CASE ANY QUEIRIES YOU CAN CHECK OUT OUR CONTACT US FORM PLEASE FEEL FREE TO MESSAGE US </h5>

  <h5 align="center"><a href="logout.php">LOGOUT</a></h5>



 
</body>
</html>