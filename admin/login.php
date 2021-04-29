<?php 
if(!isset($_SESSION)) {
session_start();
}

if (isset($_SESSION['SESS_NAME'])!="") {
    header("Location: admin.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>ADMIN</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style type="text/css">
    body {
     background: url("black.jpg");
    background-size: cover;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}



  </style>
</head>
<body>
  <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
   
    <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="text-decoration: none;margin-left: 600px;font-size: 25px">ADMIN lOGIN-EVOTING</a>

    
    
  </div>
</div>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" style="margin-top: 230px;margin-left: 200px">
            <form class="form-horizontal" role="form" action="alogin.php"  method="POST" enctype="multipart/form-data">
                <h2 style="font-size: 20px;">ADMIN</h2>
                <div class="form-group" style="margin-top: 10px">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="First Name" class="form-control" name="firstname" autofocus>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" name="password" class="form-control">
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="submit">Signin</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->
        
</body>
</html>