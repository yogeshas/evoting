<head>
	<link rel="stylesheet" href="w3css-master/w3.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<style type="text/css">
    body {
     background: url("images/wallpaper.jpg");
    background-size: cover;
}
 
  
       
  
        
 

</style>
</head>
<?php
if(!isset($_SESSION)) { 
session_start();
}
include "connection.php";
?>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="ELECTRONICCITY.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="lan_view.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Vote Results</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Profile</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
    <a href="change_pass.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Change Password</a>

    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small"> Welcome <?php echo $_SESSION['SESS_NAME']; ?></a>
    
  </div>
<div class="w3-card-4 w3-white" style="margin-top: 150px;text-align: center;height: 100%;width: 100%"><br><br><h1 style="margin-top: 50px;">
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE firstname="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT voted from voters WHERE firstname="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        echo "You have voted for: " . " " . $row['voted'];
    } else {
        echo "You have not voted yet. Please submit your vote!";
    }
}
?></div></h1>
