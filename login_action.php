	<?php
	session_start();
	include "connection.php"; 
	if(isset($_POST['login'])) {
	$firstname = $_POST["firstname"];
	$ano = $_POST["ano"];
	

	$sql = mysqli_query($con, 'SELECT l.*,a.* FROM loginusers l , area a WHERE firstname="'.$_POST['firstname'].'"  AND ano="'.$_POST['ano'].'"  ' );
	if (mysqli_num_rows($sql) >0 ) {
		$member =  mysqli_fetch_assoc($sql);
		$_SESSION['SESS_NAME'] = $member['firstname'];
		$_SESSION['SESS_RANK'] = $member['rank'];

		$startdate=$member['startdate'];
		$startdate1=strtotime($startdate);

		$cdate=date("y-m-d");
		$cdate1=strtotime($cdate);
			if (($startdate1)>($cdate1)) {
				?>
				<script>alert("Sorry for inconvience. your  election date is on <?php 

					$sql = mysqli_query($con, 'SELECT l.*,a.* FROM loginusers l , area a WHERE firstname="'.$_POST['firstname'].'"  AND a.area=l.area  ' );
					if (mysqli_num_rows($sql) >0 ) {
						$f =  mysqli_fetch_assoc($sql);
						echo $f['startdate'];
					}
				 ?>    ")
                   window.location.assign("login.php")
                  </script>

		<?php

			}
		if (($startdate1)==($cdate1)){
				
				 if( $member['livephoto']=='images/nolive.jpg'){
				header("location: photo.php");
				}
				else if($member['livephoto']!='NULL' AND $member['status']=='INACTIVE'){
				header("location: NOTVERIFIED.php");
				}
				
				else
				{
					header("location:area.php");
				}
			}
			else
			{
				echo '<script>alert("Sorry for inconvience. election is closed ")
                   window.location.assign("login.php")
                  </script>'; 
			}
	}
	else {
		$error="<center><h4><font color='#FF0000'>Invalid username or password</h4></center></font>";
		include 'login.php';
	}

	}

	?>