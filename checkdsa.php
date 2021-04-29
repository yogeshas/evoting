<?php
session_start();
include "connection.php"; 
if(isset($_POST['submit'])) {
$firstname = $_POST["firstname"];
$area= $_POST["area"];
$firstname = addslashes($firstname);
$area = addslashes($area);
$firstname = mysqli_real_escape_string($con,$firstname);
$area = mysqli_real_escape_string($con,$area);

$sql = mysqli_query($con, 'SELECT * FROM loginusers WHERE firstname="'.$_POST['firstname'].'"  AND area="'.$_POST['area'].'"  ' );
if (mysqli_num_rows($sql) >0 ) {
	$member =  mysqli_fetch_assoc($sql);
	$_SESSION['SESS_NAME'] = $member['firstname'];
	$_SESSION['SESS_AREA'] = $member['area'];
	
	 if($member['rank']=='voter'){
			header("location: votingdashboard.php");
			}
			
}
else {
	$error = "<center><h4><font color='#FF0000'>Error in the firstname or area </h4></center></font>";
	include "area.php";
}
}
else {
	$error = "<center><h4><font color='#FF0000'>Invalid Username or Password</h4></center></font>";
	include "area.php";
}
?>