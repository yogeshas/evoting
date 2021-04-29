<?php
session_start();

include "auth.php";

?>
<?php
    include 'connection.php';
    $img = $_POST['image'];
    $folderPath = "images/";
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.jpg';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
/*$sql = "UPDATE  loginusers SET livephoto='$file' WHERE firstname=".$_SESSION['SESS_NAME']."";*/
$sql3 = mysqli_query($con, 'UPDATE loginusers SET livephoto= "'.$file.'" WHERE firstname="'.$_SESSION['SESS_NAME'].'"');

if ($sql3) {
	echo '<script>alert("live photo has been stored wait for the verification login after some time")
                   window.location.assign("login.php")
                  </script>'; 
         
}

?>