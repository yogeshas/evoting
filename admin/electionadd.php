<?php 
$msg = ""; 
include 'configure.php';
if (isset($_POST['save'])) { 
	$startdate = $_POST['startdate'];
  
   
    $area = $_POST['area'];
	
	
		$sql = "INSERT INTO area (startdate,area) VALUES ('$startdate','$area')"; 

		
		if(mysqli_query($con, $sql))
		{
			header("location:electiondate.php");
		}
		else
		{
				echo '<script>alert("Duplicate data not allowed")
                   window.location.assign("electiondate.php")
                  </script>'; 
         
		}

		
		
		
} 
$result = mysqli_query($con, "SELECT * FROM candidate"); 
?> 
