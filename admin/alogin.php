<?php
session_start();
include'configure.php';
 
if(isset($_POST['submit'])){
 
	$firstname=$_POST['firstname'];
	$password=$_POST['password'];
	$s= "select * from admin where firstname='$firstname' and password= '$password'";
	$qu= mysqli_query($con, $s);
 
	if(mysqli_num_rows($qu)>0){
		$f= mysqli_fetch_assoc($qu);
	$_SESSION['SESS_NAME'] = $f['firstname'];
		header ('location:ahome.php');
	}
	else{
		echo 'username or password does not exist';
	}
}
?>
	