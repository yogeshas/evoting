<?php

 include 'configure.php';

 if(isset($_POST['done'])){

 $firstname = $_GET['firstname'];
 $lastname = $_POST['lastname'];
 $region = $_POST['region'];
 $state = $_POST['state'];
  $city = $_POST['city'];
 $area = $_POST['area'];
 $ano = $_POST['ano'];
  $voterid = $_POST['voterid'];
   $dob = $_POST['dob'];
    $email = $_POST['email'];
    
 $q = " update loginusers set firstname='$firstname', area='$area',ano='$ano' where firstname='$firstname'  ";

 $query = mysqli_query($con,$q);

 $q2 = "update voters set firstname='$firstname',area='$area',lastname='$lastname',region='$region',state='$state',city='$city',email='$email',dob='$dob',ano='$ano' where firstname='$firstname'";

 $query1 = mysqli_query($con,$q2);

 header('location:voter.php');
 }

?>




    

<!DOCTYPE html>
<html>
<head>
 <title></title>

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
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "polltest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 $firstname = $_GET['firstname'];
$sql = 'SELECT * FROM voters where firstname="'.$firstname.'"';


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

       
       ?>

       <label>Firstname</label>
       <input type="text" name="firstname" class="form-control" value="<?php  echo $row["firstname"] ?>" ><br>


       <label>lastname</label>
       <input type="text" name="lastname" class="form-control" value="<?php  echo $row["lastname"] ?>" ><br>

       
        <label>Email id</label>
       <input type="email" name="email" class="form-control" value="<?php  echo $row["email"] ?>" ><br>

        <label>Region</label>
       <input type="text" name="region" class="form-control" value="<?php  echo $row["region"] ?>" ><br>


        <label>State</label>
       <input type="text" name="state" class="form-control" value="<?php  echo $row["state"] ?>" ><br>

        <label>City</label>
       <input type="text" name="city" class="form-control" value="<?php  echo $row["city"] ?>" ><br>

      
        <label>Adharcard Number</label>
       <input type="text" name="ano" class="form-control" value="<?php  echo $row["ano"] ?>" ><br>

        <label>Dob</label>
       <input type="text" name="dob" class="form-control" value="<?php  echo $row["dob"] ?>" ><br>

        <label>Area</label>
       <input type="text" name="area" class="form-control" value="<?php  echo $row["area"] ?>" ><br>

        <label>Voterid</label>
       <input type="text" name="voterid" class="form-control" value="<?php  echo $row["voterid"] ?>" ><br>



       



      <?php        
 

    }
} else {
    echo "0 results";
}

$conn->close();
?>
 

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>