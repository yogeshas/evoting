<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> Vote your  political party? <br>
	<input type="radio" name="lan" value="BJP"> 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "polltest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  firstname FROM candidate WHERE symbol='bjp'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["firstname"]  ;
    }
} else {
    echo "0 results";
}

$conn->close();
?>


<br>
<input type="radio" name="lan" value="CONGRESS">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "polltest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  firstname FROM candidate WHERE symbol='congress'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["firstname"]  ;
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
