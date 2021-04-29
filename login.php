<style type="text/css">
    body {
     background: url("images/wallpaper.jpg");
    background-size: cover;
}
</style>
<?php 
if(!isset($_SESSION)) {
session_start();
}
/*
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
*/
?>
<head>
  <link rel="stylesheet" href="w3css-master/w3.css">
</head>
<br>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
    
    <a href="register.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sign-up</a>
    <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sign-in</a>

    
    
  </div>
  

</div>
<div style="margin-top: 50px;">

    <div class="w3-modal-content w3-card-4 " style="max-width:600px;height: 480px;">
  
      <h2>Login</h2>

      <form class="w3-container" action="login_action.php" method="post">
        <?php global $error; echo $error; ?>
        <?php global $nam; echo $nam; ?>
        <div class="w3-section">
          <label><b>First Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter firstname" name="firstname" required>
          <label><b>Adharcard Number</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Password" name="ano" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="login">Login</button>
          
        </div>
        <div>
          <h3 style="text-align: center;">Live Voting Started</h3>
 <marquee><table    class="w3-table-all" id="myTable" style="width: 200px;margin-left: 1px;margin-top: 20px;" >
 
 <?php
 include 'admin/configure.php'; 
 $q = "select * from votes ";
 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
                      

                      ?>
                     <tr style="">
 <td > <?php echo $res['fullname'];  ?> </td>
 <td> <?php echo $res['votecount'];  ?> </td>


 </tr>

 <?php 
 }
  ?> 
                     
 
 </table> </marquee>
</div>
      </form>

     

    </div>
  </div>
<br><br><br><br><br>
<?php include "footer.php"; ?>