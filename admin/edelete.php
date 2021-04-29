
<?php

include 'configure.php';

$id = $_GET['id'];

$q = " DELETE FROM `area` WHERE id = $id ";

mysqli_query($con, $q);

header('location:electiondate.php');

?>