<?php

 include 'configure.php';

 if(isset($_POST['done'])){

 $firstname = $_GET['firstname'];
 $status = $_POST['status'];
 $q = " update loginusers set firstname='$firstname', status='$status' where firstname='$firstname'  ";

 $query = mysqli_query($con,$q);

 header('location:area.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>
<link rel="stylesheet" type="text/css" href="../w3css-master/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="w3-red">
 <h1 class="text-white text-center"> PHOTO VERIFICATION</h1>
 </div><br>


<div style="margin-left: 300px">
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="status" value="ACTIVE" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">ACTIVE</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="status" value="INACTIVE" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">INACTIVE</label>
</div>
<br><br>

</div>
 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>












