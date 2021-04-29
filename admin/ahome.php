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
   <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
select
{
  width: 570px;
  height: 40px;
}




</style>
</head>
<body>
 
<!-- Sidebar -->
<div class="w3-sidebar w3-red w3-bar-block" style="width:20%; margin-top: -100px; ">
    <a href="logout.php" class="w3-bar-item w3-button w3-hover-red" style="margin-top: 100px;text-decoration: none;margin-left: 20px;font-size: 30px">  
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
<div class="w3-container" style="margin-top: 100px;" >

<div class="w3-row-padding" style="margin-left: -80px;">
  <div class="w3-col s3" style="border: 1px solid;background-color: black;color: white;"><img src="cimage/logo.png" height="100px" width="100px">  Total  voters &nbsp; &nbsp;
<?php
include 'configure.php';


$sql="SELECT * FROM voters ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>


  </div>
   <div class="w3-col s3" style="border: 1px solid;background-color: black;color: white;"><img src="cimage/logo.png" height="100px" width="100px">Total  candidate   &nbsp; &nbsp;
<?php
include 'configure.php';


$sql="SELECT * FROM candidate ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>

    </div>
     <div class="w3-col s3" style="width: 290px;border: 1px solid;background-color: black;color: white;"><img src="cimage/logo.png" height="100px" width="100px">  bjp candidate  &nbsp; &nbsp;
<?php
include 'configure.php';


$sql="SELECT * FROM candidate WHERE symbol='bjp'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
      </div>
       <div class="w3-col s3" style="border: 1px solid;background-color: black;color: white;width: 295px;"><img src="cimage/logo.png" height="100px" width="100px">  congress  candidates
        <?php
include 'configure.php';


$sql="SELECT * FROM candidate WHERE symbol='congress'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
        </div>
</div>

<!-----------FIRST END ----->


<div class="w3-row-padding" style="margin-left: -80px;">
  <div class="w3-col s3" style="border: 1px solid;background-color: black;color: white;"><img src="cimage/logo.png" height="100px" width="100px">Banglore voters &nbsp; 
<?php
include 'configure.php';


$sql="SELECT * FROM voters WHERE city='banglore' ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>


  </div>
   <div class="w3-col s3" style="border: 1px solid;background-color: black;color: white;"><img src="cimage/logo.png" height="100px" width="100px">Bhubaneshwar voters  
<?php
include 'configure.php';


$sql="SELECT * FROM voters WHERE city='BHUBANESHWAR' ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>

    </div>
     <div class="w3-col s3" style="width: 290px;border: 1px solid;background-color: black;color: white;"><img src="cimage/logo.png" height="100px" width="100px">  Ahmedabad voters   
<?php
include 'configure.php';


$sql="SELECT * FROM voters   WHERE city='AHMEDABAD'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
      </div>
       <div class="w3-col s3" style="border: 1px solid;background-color: black;color: white;width: 295px;"><img src="cimage/logo.png" height="100px" width="100px">Jaipur voters &nbsp;
        <?php
include 'configure.php';


$sql="SELECT * FROM voters WHERE city='JAIPUR'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
        </div>
</div>
<!-- SECOND END-->




<div style="text-align: center;" class="text-typing" >
  <h1 style="margin-top: 100px;margin-left: -200px;">Vote results</h1>
  <table    class="w3-table-all" id="myTable" style="margin-left: -80px;width: 500px;margin-left: 200px;margin-top: 10px;" >
 <tr class="w3-red">
 
 <th scope="col">   Symbol </th>
 <th scope="col"> vote </th>
 
 </tr >
 <?php
 include 'configure.php'; 
 $q = "select * from votes ";
 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
                      

                      ?>
                     <tr class="text-center">
 <td> <?php echo $res['fullname'];  ?> </td>
 <td> <?php echo $res['votecount'];  ?> </td>


 </tr>

 <?php 
 }
  ?> 
                     
 
 </table>  


</div>
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