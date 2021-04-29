<?php

 include 'configure.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
  $symbol = $_POST['symbol'];
  $area = $_POST['area'];
 $q = " update candidate set id=$id,firstname='$firstname',lastname='$lastname',symbol='$symbol', area='$area' where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:candidate.php');
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
 $id = $_GET['id'];
$sql = 'SELECT * FROM candidate where id="'.$id.'"';


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

       
       ?>

       <label>Firstname</label>
       <input type="text" name="firstname" class="form-control" value="<?php  echo $row["firstname"] ?>" ><br>


       <label>lastname</label>
       <input type="text" name="lastname" class="form-control" value="<?php  echo $row["lastname"] ?>" ><br>

       

        <label>Area</label>
       <input type="text" name="area" class="form-control" value="<?php  echo $row["area"] ?>" ><br>

        <label>symbol</label>
       <input type="text" name="symbol" class="form-control" value="<?php  echo $row["symbol"] ?>" ><br>



       



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