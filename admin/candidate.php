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

<div class="w3-container" style="margin-top: 100px" >
 <h1 style="text-align: center;">CANDIDATE LIST</h1>
<div class="w3-container">
 

                    <button onclick="document.getElementById('id01').style.display='block'" style="background-color: white;height: 50px;width: 200px;cursor: pointer;margin-left: -90px;"  >ADD CANDIDATES<i class="fa fa-plus" style="margin-left: 10px;"></i> </button>  


 
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
       
      </div>

      <form class="w3-container" action="candidate_add.php" method="post"  enctype="multipart/form-data">
        <div class="w3-section">
          <div class="w3-pale-green w3-center" style="margin-top: 40px;">
          <h1>Add New Candidate</h1>
        </div>
        <br><br><br>
          FIRST NAME:<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="ENTER CANDIDATE NAME" name="firstname" required>
          LAST NAME:
          <input class="w3-input w3-border" type="text" placeholder="ENTER LAST NAME" name="lastname" required><br>
          Choose a Position:
          <select  name="symbol">
            <option  selected="selected" disabled="">-Select-</option>
            <option value="bjp">BJP</option>
            <option value="congress">CONGRESS</option>
            
          </select><br><br>
           AREA NAME:
          <select  name="area">
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
          Choose Candidate Photo:<br>
          <input type="file"  name="profile"  required>
        

      <br><br>
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red w3-hover-red">Cancel</button>
        <input type="submit"  value="Save" class="w3-right w3-button w3-green w3-padding w3-hide-small w3-hover-green" name="save">
 
      </div>
      </form>

    </div>
  </div>
</div>
<br>
            
<div class="w3-container w3-cell" style="margin-top: 50px; margin-left: -100px; " >
  
  <input  type="text" placeholder="Search for id.." class="w3-input w3-border w3-padding w3-cell" id="myInput" onkeyup="myFunction()" style="width: 570px;margin-left: -90px;">
  <input  type="text" placeholder="Search for symbol.." class="w3-input w3-border w3-padding w3-cell" id="Input" onkeyup="mySymbol()" style="width: 570px;">
<div class="container " style="margin-top: -30px;" >
 <div >
 <br><br>
 <br>
 <table    class="w3-table-all" id="myTable" style="margin-left: -100px;" >
 <tr class="w3-red">
 <th>Id</th>
 <th scope="col"> First name </th>
 <th scope="col">Last name </th>
 <th scope="col"> Symbol </th>
 <th scope="col">Area</th>
 <th scope="col"> photo </th>
 <th scope="col"> Modify </th>
 </tr >
 <?php
 include 'configure.php'; 
 $q = "select * from candidate ";
 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
                      
$image = (!empty($res['profile'])) ? 'cimage/'.$res['profile'] : 'cimage/profile.jpg';
                      ?>
                     <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['firstname'];  ?> </td>
 <td> <?php echo $res['lastname'];  ?> </td>
 <td> <?php echo $res['symbol'];  ?> </td>
 <td> <?php echo $res['area'];  ?> </td>
 <td> <?php 
 echo  "<img src='".$image."' width='100px' height='100px'>" ?></td>
 <td> <button class="btn-danger btn"> <a href="cdelete.php?id=<?php echo $res['id']; ?>" class="text-white" style="text-decoration: none;color: white"> Delete </a>  </button> <br><br><br>
  <button class="btn-primary btn" > <a href="cupdate.php?id=<?php echo $res['id']; ?>" class="text-white" style="text-decoration: none;color: white;"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?> 
                     

 </table>  
 <span id="error"></span> 
<footer>
  <p align="center" style="margin-top: 100px;">Copyright@yogesh.com</p>
</footer>
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
    td = tr[i].getElementsByTagName("td")[1];
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
function mySymbol() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("Input");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
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