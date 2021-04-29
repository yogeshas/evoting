
<?php

include 'configure.php';

$id = $_GET['id'];

$q = " DELETE FROM `candidate` WHERE id = $id ";

mysqli_query($con, $q);

header('location:candidate.php');

?>