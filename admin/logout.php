<?php
session_start();
session_destroy();
unset($_SESSION['firstname']);
header('location: login.php');
?>