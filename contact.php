<?php

//To Handle Session Variables on This Page
session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("connection.php");

//If user Actually clicked register button
if(isset($_POST)) {

  //Escape Special Characters In String First
  $username = mysqli_real_escape_string($con, $_POST['username']);
 
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $message = mysqli_real_escape_string($con, $_POST['message']);
 

  

    //sql new registration insert query
    $sql = "INSERT INTO contact(username, email, phone, message) VALUES ('$username', '$email', '$phone', '$message')";

    if($con->query($sql)===TRUE) {
      
      $_SESSION['registerCompleted'] = true;
      header("Location: index.php");
      exit();
    } else {
      //If data failed to insert then show that error. Note: This condition should not come unless we as a developer make mistake or someone tries to hack their way in and mess up :D
      echo "Error " . $sql . "<br>" . $conn->error;
    }
  } 
?>