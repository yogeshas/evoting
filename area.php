<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="w3css-master/w3.css">
</head>
<body>
	<div class="w3-bar w3-black  w3-text-white w3-card-4">
		<a href="" class="w3-bar-item" style="text-decoration: none;margin-left: 600px;font-size: 20px;font-weight: bold;text-transform: uppercase;">WELCOME 
		 <?php echo $_SESSION['SESS_NAME']; ?> TO E-VOTING  </a>
	</div>
	<br><br>

<h1 align="center">PLEASE DO VERIFY THE AREA FOR SECURITY PURPOSE</h1>
<form action="checkdsa.php" method="post" style="margin-top: 100px;margin-left: 500px; height: 250px;width: 500px;" class="w3-card-4" enctype="multipart/form-data">
	 <?php global $error; echo $error; ?>
        <?php global $nam; echo $nam; ?>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USER NAME:<br><br>
	<input type="text" name="firstname" style="width: 480px; height: 50px;margin-left: 10px;"><br>
	<br>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AREA NAME:<br><br>
          <select  name="area" style="width: 480px;height: 50px;margin-left: 10px;">
           
            <option  selected="selected" disabled="">-Select-</option>
            <option value="mainleader">MAIN LEADER</option>
            <option   disabled="">---RAJASTHAN---</option>
            <option value="sirsiroad">SIRSI ROAD</option>
            <option value="bapunagar">BAPU NAGAR</option>
            <option   disabled="">---KARNATAKA---</option>
            <option value="electroniccity">ELECTRONIC CITY</option>
            <option value="anekal">ANEKAL</option>
            <option   disabled="">---ORISSA---</option>
            <option value="nagarkalinga">NAGAR KALINGA</option>
            <option value="toshali">TOSHALI</option>
            <option   disabled="">---GUJARAT---</option>
            <option value="ambli">AMBLI</option>
            <option value="amraiwadi">AMRAIWADI</option>
            
          </select><br><br>
          <input type="submit" name="submit" style="margin-left: 200px;margin-top: 5px;color: white;background-color: green;height: 40px;width: 100px;border: none;">
</form>
</body>
</html>