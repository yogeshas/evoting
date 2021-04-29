<?php

include 'configure.php';

$firstname= $_GET['firstname'];

$q = " DELETE FROM `voters` WHERE firstname = '$firstname' ";
$q1=  " DELETE FROM `loginusers` WHERE firstname = '$firstname' ";
if(mysqli_query($con, $q))

{
	if (mysqli_query($con,$q1)) {
		echo '<script>alert("Are you sure you want to delete")
                   window.location.assign("voter.php")
                  </script>'; 
	}
	else
	{
		echo "error ";
	}


}

?>