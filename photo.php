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
    
  


    <form method="POST" action="storeimage.php" style="margin-top: 80px;">
        <div class="row" >
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button class="btn-danger" value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results" style="margin-top: 10px;margin-left: -100px;width: 520px;margin-top: -20px;">Your captured image will appear here...</div>
            </div>
            <div class="col-md-12 text-center">
                <br/>
                <button class="btn btn-success" name="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
  
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
 
</body>
</html>