
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-VOTING</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" type="text/css" href="style5.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="w3css-master/w3.css">
<style type="text/css">
    body {
     background: url("images/wallpaper.jpg");
    background-size: cover;
}
input[type="radio"]
{
    width: 60px;
    height: 40px;



}

 

</style>
</head>
<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
?>

<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    
    <a href="#" class="w3-bar-item w3-button w3-padding-large" >Home</a>
    
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small"  onclick="document.getElementById('id01').style.display='block'">Profile</a>
    <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width: 100%;height: 800px;margin-top: -100px;">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright w3-black" title="Close Modal">&times;</span>
        
      </div>
<div class=" w3-white" style="text-align: center;height: 300px;font-size: 30px;"><br><br>
<?php
include 'connection.php';
$username = $_SESSION['SESS_NAME'];
$area = $_SESSION['SESS_AREA'];
$query = 'SELECT status FROM voters WHERE firstname="'.$_SESSION['SESS_NAME'].'" ';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT * from voters WHERE firstname="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);

?>
 <div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="votingdashboard.php">Home</a></li>
             
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src=" <?php echo $row['profile'] ?>" alt="Admin" class="rounded-circle" width="150">
                     <img src=" <?php echo $row['vphoto'] ?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4> <?php echo $row['firstname'] ?> </h4>
                      <p class="text-secondary mb-1" style="font-size: 20px"> <?php echo $row['email'] ?> </p>
                      <p class="text-muted font-size-sm"> <?php echo $row['city'] ?> </p>
                     
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $row['firstname'] ?>   <?php echo $row['lastname'] ?> 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Adharcard Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['ano'] ?> 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $row['dob'] ?> 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">State</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['state'] ?> 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">area</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $row['area'] ?> 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">voterid</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $row['voterid'] ?> 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">You have voted for</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $row['voted'] ?> 
                    </div>
                  </div>

                </div>

              </div>
             
            </div>
          </div>
        </div>
    </div> 
<?php
    }

}
?>
</div></h1>

      

     

    </div>
  </div>
  <a href="#" onclick="document.getElementById('id02').style.display='block'" class="w3-bar-item w3-button w3-padding-large">vote results </a>
 <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="height: 100px;margin-top: 100px;">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright w3-black" title="Close Modal">&times;</span>
        
      </div>
<div class=" w3-white" style="text-align: center;height: 300px;font-size: 30px;"><img src='images/bjp.png' width='100px' height='100px' style='margin-left:50px;margin-right:300px;'><br>
<div style="margin-top: -70px;margin-left: 100px">&nbsp;&nbsp;
<?php
include 'connection.php';
$username = $_SESSION['SESS_NAME'];
$area = $_SESSION['SESS_AREA'];


$sql='SELECT  * FROM voters WHERE  area="'.$_SESSION['SESS_AREA'].'" AND  status="VOTED" AND voted="BJP" ';

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?> &nbsp;voters voted</div>
<h1 style="margin-top: 50px;"><img src='images/Congress.jpg' width='150px' height='100px' style='margin-left:50px;margin-right:300px;'></h1>
<div style="margin-top: -70px;margin-left: 100px">&nbsp;&nbsp;
<?php
include 'connection.php';
$username = $_SESSION['SESS_NAME'];
$area = $_SESSION['SESS_AREA'];


$sql='SELECT  * FROM voters WHERE  area="'.$_SESSION['SESS_AREA'].'" AND  status="VOTED" AND voted="CONGRESS" ';

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>&nbsp;voters voted</div>
</div>

      

     

    </div>
  </div>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
    

    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small"> Welcome <?php echo $_SESSION['SESS_NAME']; ?></a>
    
  </div>
<div style="margin-top: 20px;width: 1300px;margin-left: 100px;height: 700px;" class="w3-card-4 w3-white">
    <?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<form action="asubmit.php" name="vote" method="post" id="myform" >
<h2 style="text-align: center;" >CHOOSE YOUR LEADER<br>MLA</h2>
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
$username = $_SESSION['SESS_NAME'];
$area = $_SESSION['SESS_AREA'];
$sql = 'SELECT * FROM candidate WHERE area="'.$_SESSION['SESS_AREA'].'" AND symbol = "bjp"';


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "<img src='images/bjp.png' width='200px' height='200px' style='margin-left:50px;margin-right:300px;'>" ;
        echo $row["firstname"]  ;       
 

    }
} else {
    echo "0 results";
}

$conn->close();
?>

<input type="radio" name="lan" value="BJP" style="border-radius: 20px;margin-top: 50px;margin-left: 400px;color: red;"> 
<br>


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

$username = $_SESSION['SESS_NAME'];
$area = $_SESSION['SESS_AREA'];
$sql = 'SELECT * FROM candidate WHERE area="'.$_SESSION['SESS_AREA'].'" AND symbol = "congress"';


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "<img src='images/Congress.jpg' width='300px' height='200px' style='margin-left:10px;margin-right:250px;margin-top:100px;'>" ;
        echo  $row["firstname"]  ;
    }
} else {
    echo "0 results";
}

$conn->close();
?>
<input type="radio" name="lan" value="CONGRESS" style="margin-top: 50px;margin-left: 400px;">

<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:150px;margin-top: -20px;background-color: black;color: white;height: 50px;" /></center>
</form>


</div>


<?php include "footer.php" ;?>