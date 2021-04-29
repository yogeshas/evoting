<?php
session_start();
$captcha = "" ;
include "connection.php"; 
if(isset($_POST['submit'])) {
	/*if (isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
		  $error = "Please check captcha too";
		  include ('register.php');
		  exit();
        }
        $secretKey = "6LeD3hEUAAAAADNeeaGRfKmABjn1gnsXxrpdTa2J";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
		  $error = "You are spammer !";
        }*/
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con,$_POST['lastname']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$ano = mysqli_real_escape_string($con,$_POST['ano']);
$dob = mysqli_real_escape_string($con,$_POST['dob']);
$region = mysqli_real_escape_string($con,$_POST['region']);
$state = mysqli_real_escape_string($con,$_POST['state']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$area = mysqli_real_escape_string($con,$_POST['area']);
$voterid = mysqli_real_escape_string($con,$_POST['voterid']);
if($_FILES['profile']['name']){
		move_uploaded_file($_FILES['profile']['tmp_name'], "image/".$_FILES['profile']['name']);
		$img="image/".$_FILES['profile']['name'];
	}
if($_FILES['vphoto']['name']){
		move_uploaded_file($_FILES['vphoto']['tmp_name'], "image/".$_FILES['vphoto']['name']);
		$img1="image/".$_FILES['vphoto']['name'];
	}
$sq = mysqli_query($con, 'SELECT firstname FROM loginusers WHERE firstname="'.$_POST['firstname'].'"');
$exist = mysqli_num_rows($sq);
	
		if($exist==1){
		$nam="<center><h4><font color='#FF0000'>The username already exist, peak another.</h4></center></font>";
		unset($firstname);
		include('register.php');
		exit();
		}
$sql = mysqli_query($con, 'INSERT INTO voters(firstname,lastname,email,ano,dob,region,state,city,area,profile,voterid,vphoto)
         VALUES("'.$_POST['firstname'].'","'.$_POST['lastname'].'","'.$_POST['email'].'","'.$_POST['ano'].'","'.$_POST['dob'].'","'.$_POST['region'].'","'.$_POST['state'].'","'.$_POST['city'].'","'.$_POST['area'].'","'.$img.'","'.$_POST['voterid'].'","'.$img1.'")');
		 if (!$sql) { 
		 die (mysqli_error($con));
		 }
$sql2 = mysqli_query($con, 'INSERT INTO loginusers(firstname,ano,area,profile)
         VALUES("'.$_POST['firstname'].'","'.$_POST['ano'].'","'.$_POST['area'].'","'.$img.'")'); 
if (!$sql2) { 
		 die (mysqli_error($con));
		 }
else {
echo '<script>alert("successfully registered ")
                   window.location.assign("login.php")
                  </script>'; 
}
}
else {
	 $error="<center><h4><font color='#FF0000'>Registration Failed Due To Error !</h4></center></font>";
     include"register.php";
}
?>
