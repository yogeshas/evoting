<?php
if(!isset($_SESSION)) { 
session_start();
}
include "../auth.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>ADMIN PANEL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../w3css-master/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
  <style type="text/css">
    #myNavbar
{
  margin-left: -10px;
  height: 45px;


}
a
{
  text-decoration: none;

}
h4
{
  margin-top: 20px;
  font-size: 15px;
  font-family: sans-serif;
  font-weight: bold;
}
.btn-1
{
  border: none;
  color: white;
  background: red;
  margin-bottom: 10px;
  margin-top: 1px;
  height: 40px;
  width: 100px;
}
.btn-2 {
  border: none;
  background: orange;
  margin-bottom: 10px;
  margin-top: 1px;
  height: 40px;
  width: 100px;
}
input[type=text]
{
  width: 1135px;
  margin-left: -73px;
}
  




</style>
</head>
<body>
 
<!-- Sidebar -->
<div class="w3-sidebar w3-red w3-bar-block" style="width:20%; margin-top: -100px; ">
    <a href="admin/logout.php" class="w3-bar-item w3-button w3-hover-red" style="margin-top: 100px;text-decoration: none;margin-left: 20px;font-size: 30px">  
   <span style="margin-left: 10px">E-VOTING</span></a>
    <a href="ahome.php" class="w3-bar-item w3-button w3-hover-red" style="margin-top: 50px;text-decoration: none;margin-left: 10px">  
    <i class="fa fa-gear fa-spin" style="font-size:24px"></i> <span style="margin-left: 10px;font-size: 15px;">Dashboard</span></a>
    <br>
    <a href="candidate.php" class="w3-bar-item w3-button w3-hover-red" style="margin-top: 10px;text-decoration: none;margin-left: 10px;font-size: 15px;">  
    <i class="fa fa-user " style="font-size:24px"></i> <span style="margin-left: 10px">Candidate</span></a>
    <br>
    <a href="voter.php" class="w3-bar-item w3-button w3-hover-red" style="margin-top: 10px;text-decoration: none;margin-left: 10px;font-size: 15px;">  
    <i class="fa fa-group " style="font-size:20px"></i> <span style="margin-left: 10px">Voters</span></a>
    <br>
    <a href="area.php" class="w3-bar-item w3-button w3-hover-red" style="margin-top: 10px;text-decoration: none;margin-left: 10px;font-size: 15px;">  
    <i class="fa fa-photo" style="font-size:20px"></i> <span style="margin-left: 10px">Photo verification</span></a>
    <br>
    <a href="query.php" class="w3-bar-item w3-button w3-hover-red" style="margin-top: 10px;text-decoration: none;margin-left: 10px;font-size: 15px;">  
    <i class="fa fa-question  " style="font-size:24px"></i> <span style="margin-left: 10px">Query</span></a>
    <br>
    <a href="electiondate.php" class="w3-bar-item w3-button w3-hover-red" style="margin-top: 10px;text-decoration: none;margin-left: 10px;font-size: 15px;">  
    <i class="fa fa-map-marker  " style="font-size:24px"></i> <span style="margin-left: 10px">Area</span></a>
    <br>
    
  
</div>

<!-- Page Content -->
<div style="margin-left:25%">
<div class="w3-container" style="margin-top: 100px" >

<div class="w3-container">
 <div class="w3-container"  >
  <h1 style="margin-left: -40px;text-align: center;">VOTERS LIST</h1>
  <input  type="text" placeholder="Search for Firstname.." class="w3-input w3-border w3-padding" id="myInput" onkeyup="myFunction()" style="margin-left: -105px;width: 1122px">
<div class="container " style="margin-top: -30px;" >
 <div >
 <br><br>
 <br>
  <table  id="myTable" class="w3-table-all  table table-striped table-hover table-bordered" style="font-size: 16px;margin-left: -120px">
 
 <tr class="w3-red text-white text-center ">
 

 <th> Firstname </th>
 <th> Lastname</th>
 <th> Email</th>

 <th>Adharcard number</th>
 <th>Date of birth</th>
 
 <th>area</th>
 <th>Status</th>
 <th>Photo</th>
 <th>Modify </th>
 </tr >

 <?php

 include 'configure.php'; 
 $q=mysqli_query($con,"SELECT c.* , p.* FROM voters c,loginusers p WHERE c.firstname=p.firstname");



 while($res = mysqli_fetch_array($q)){
$image = (!empty($res['profile'])) ? '../'.$res['profile'] : '../image/profile.jpg';
 ?>
 <tr class="text-center">

 <td> <?php echo $res['firstname'];  ?> </td>
 <td> <?php echo $res['lastname'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
<td> <?php echo $res['ano'];  ?> </td>
 <td> <?php echo $res['dob'];  ?> </td>

 <td> <?php echo $res['area'];  ?> </td>
  <td> <?php echo $res['status'];  ?> </td>
 <td> <?php 
 echo  "<img src='".$image."' width='100px' height='100px'>" ?></td>
 <td> <button class="btn-danger btn"> <a href="adelete.php?firstname=<?php echo $res['firstname']; ?>" class="text-white"> Delete </a>  </button> 
  <button class="btn-primary btn"> <a href="vupdate.php?firstname=<?php echo $res['firstname']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>
 </div>
 </div>
 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</div>



</div>
     
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>



  


 </div>
 </div>

 

</div>



</div>
      <footer class="w3-center w3-light-grey w3-padding-48 w3-large" style="margin-top: 200px;">
  <p>E-VOTING </p>
</footer>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
 
}
</script>




<script>
function onClick(element) {
  document.getElementById("cat").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>