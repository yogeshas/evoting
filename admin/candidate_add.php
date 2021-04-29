<?php 
$msg = ""; 
include 'configure.php';
if (isset($_POST['save'])) { 
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $symbol = $_POST['symbol'];
    $area = $_POST['area'];
	$profile = $_FILES["profile"]["name"]; 
	$tempname = $_FILES["profile"]["tmp_name"];	 
		$folder = "cimage/".$profile; 
	
		$sql = "INSERT INTO candidate (firstname,lastname,symbol,profile,area) VALUES ('$firstname','$lastname','$symbol','$profile','$area')"; 

		
		mysqli_query($con, $sql);

		
		
		if (move_uploaded_file($tempname, $folder)) { 
-				session_start();
			  $_SESSION['success_message'] = "CANDIDATE ADDED SUCCESSFULLY";
			  header("Location: candidate.php");
		}else{ 
			 $_SESSION['success_message'] = "Error in details please check it";
	} 
} 
$result = mysqli_query($con, "SELECT * FROM candidate"); 
?> 
