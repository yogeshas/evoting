<?php
include "connection.php";
session_start();
if(empty($_POST['lan'])){
echo '<script>alert("please select the person to vote")
                   window.location.assign("votingdashboard.php")
                  </script>'; 

exit();
}
$lan = $_POST['lan'];
$sess = $_SESSION['SESS_NAME'] ;
$lan = addslashes($_POST['lan']);
$lan = mysqli_real_escape_string($con, $lan);
$sql = mysqli_query($con, 'SELECT * FROM voters WHERE firstname="'.$_SESSION['SESS_NAME'].'" AND status="VOTED"');
if(mysqli_num_rows($sql) > 0 ) {
	echo '<script>alert("you have already been voted. it will store the one response ")
                   window.location.assign("votingdashboard.php")
                  </script>'; 
	
		exit();	
}
else{
$sql1 =mysqli_query($con, 'UPDATE votes SET votecount = votecount + 1 WHERE fullname = "'.$_POST['lan'].'"');
$sql2 =mysqli_query($con, 'UPDATE voters SET status="VOTED" WHERE firstname="'.$_SESSION['SESS_NAME'].'"');
$sql3 = mysqli_query($con, 'UPDATE voters SET voted= "'.$_POST['lan'].'" WHERE firstname="'.$_SESSION['SESS_NAME'].'"');
	if(!$sql1 && !$sql2){
	die("Error on mysql query".mysqli_error());
	}
	else{
	echo '<script>alert("Congratualtions you have made your vote ")
                   window.location.assign("votingdashboard.php")
                  </script>'; 
	
	exit();
	}
}
?>
