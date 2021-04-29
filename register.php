<style type="text/css">
    body {
     background: url("images/wallpaper.jpg");
    background-size: cover;
}
</style>

<script src='https://www.google.com/recaptcha/api.js'></script>
<?php 
if(!isset($_SESSION)) {
session_start();
}

?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="w3css-master/w3.css">
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
  
 <link rel="stylesheet" href="https://rawgit.com/anhr/InputKeyFilter/master/InputKeyFilter.css" type="text/css">   
  <script type="text/javascript" src="https://rawgit.com/anhr/InputKeyFilter/master/Common.js"></script>
  <script type="text/javascript" src="https://rawgit.com/anhr/InputKeyFilter/master/InputKeyFilter.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
    
    <a href="register.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sign-up</a>
    <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sign-in</a>

    
    
  </div>
  

</div>
<div style="margin-top: 100px;">
<div style="margin-left: -100px;">
    <div class="w3-container  w3-modal-content w3-card-4 " style="max-width:600px">
  
      

      <form class="w3-container" action="reg_action.php" name="form1" method="post" enctype="multipart/form-data">
      	 <h2>SIGN-UP</h2>
        <div class="w3-container">
          <label><b>First Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="firstname"  onkeyup="allLetter(document.form1.firstname)" required>
           <script type="text/javascript">
      function allLetter(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/;
      if(inputtxt.value.match(letters))
      { 
      
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');-
      return false;
      }
      }
    </script>
           <label><b>Last Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter lastname" name="lastname"   onkeyup="allLetter(document.form1.lastname)" required>
           <script type="text/javascript">
      function allLetter(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/;
      if(inputtxt.value.match(letters))
      { 
      
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      return false;
      }
      }
    </script>
           <label><b>Email Id</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter email" name="email" required>

          
           <label><b>Adharcard number</b></label>
          <input type="text" id="Integer"   placeholder="Adharcard number" class="w3-input w3-border" name= "ano"  minlength="12" maxlength="12" required><br>
          <script>
  CreateIntFilter("Integer", function(event){
      inputKeyFilter.RemoveMyTooltip();
      var elementNewInteger = document.getElementById("NewInteger");
      var integer = parseInt(this.value);
      if(inputKeyFilter.isNaN(integer, this)){
        elementNewInteger.innerHTML = "";
        return;
      }
     
      elementNewInteger.innerHTML = integer;
    }
    
    
    , function(event){ inputKeyFilter.isNaN(parseInt(this.value), this); }
  );
</script>
           <label><b>Date of birth</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" id="txtDate" placeholder="Enter Date of Birth(Example: dd/mm/yyyy)" name="dob" onblur = "ValidateDOB()"  required>
          <span class="error" id="lblError"></span>
    <script type="text/javascript">
    function ValidateDOB() {
        var lblError = document.getElementById("lblError");
 
        
        var dateString = document.getElementById("txtDate").value;
        var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;
 
        
        if (regex.test(dateString)) {
            var parts = dateString.split("/");
            var dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
            var dtCurrent = new Date();
            lblError.innerHTML = "Eligibility 18 years ONLY."
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
                return false;
            }
 
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {
 
                
                if (dtCurrent.getMonth() < dtDOB.getMonth()) {
                    return false;
                }
                if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                 
                    if (dtCurrent.getDate() < dtDOB.getDate()) {
                        return false;
                    }
                }
            }
            lblError.innerHTML = "";
            return true;
        } else {
            lblError.innerHTML = "Enter date in dd/MM/yyyy format ONLY."
            return false;
        }
    }
</script><br>
          <label><b>Region</b></label>
          <select id="countySel" size="1" name="region" style="width: 100%;height: 30px;border-radius: 0.3em;background-color: white;">
        <option value="" selected="selected">-- Select Region --</option>
    </select><br><br>
    <label><b>State</b></label>
     <select id="stateSel" size="1" name="state" style="width: 100%;height: 30px;border-radius: 0.3em;background-color: white;">
        <option value="" selected="selected">-- Select State--</option>
    </select><br><br>
    <label><b>City</b></label>
     <select id="citySel" size="1" name="city" style="width: 100%;height: 30px;border-radius: 0.3em;background-color: white;">
        <option value="" selected="selected">-- Select City--</option>
    </select><br><br>
    <label><b>Area</b></label>
     <select id="zipSel" size="1" name="area" style="width: 100%;height: 30px;border-radius: 0.3em;background-color: white;">
        <option value="" selected="selected">-- Select Area--</option>
    </select><br><br>
    User Profile<br>
     <input type="file"  name="profile"   required><br><br>
<label><b>Voter Id</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="ABC/0000000" pattern="[A-Za-z]{3}[0-9]{7}" name="voterid" required>
         Upload Voterid Card<br>
     <input type="file"  name="vphoto"   required><br><br>
    <div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0" style="margin-left: 2px;" ></div> 
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="submit">Submit</button>
          
        </div>
      </form>

    

    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<script>
var countryStateInfo = {
  "SOUTH": {
    "KARNATAKA": {
      "BANGLORE": ["electroniccity", "anekal"]
    },
    
  },
   "EAST": {
    "ORISSA": {
      "BHUBANESHWAR": ["nagarkalinga","toshali"]
      
    },
    
  },
   "WEST": {
    "GUJARAT": {
      "AHMEDABAD": ["ambli","amraiwadi"]
      
    },
    
  },
  "NORTH": {
    "RAJASTHAN": {
      "JAIPUR": ["sirsiroad","bapunagar"]
      
    },

    
  },



}


window.onload = function () {
  
  //Get html elements
  var countySel = document.getElementById("countySel");
  var stateSel = document.getElementById("stateSel"); 
  var citySel = document.getElementById("citySel");
  var zipSel = document.getElementById("zipSel");
  
  //Load countries
  for (var country in countryStateInfo) {
    countySel.options[countySel.options.length] = new Option(country, country);
  }
  
  //County Changed
  countySel.onchange = function () {
     
     stateSel.length = 1; // remove all options bar first
     citySel.length = 1; // remove all options bar first
     zipSel.length = 1; // remove all options bar first
     
     if (this.selectedIndex < 1)
       return; // done
     
     for (var state in countryStateInfo[this.value]) {
       stateSel.options[stateSel.options.length] = new Option(state, state);
     }
  }
  
  //State Changed
  stateSel.onchange = function () {    
     
     citySel.length = 1; // remove all options bar first
     zipSel.length = 1; // remove all options bar first
     
     if (this.selectedIndex < 1)
       return; // done
     
     for (var city in countryStateInfo[countySel.value][this.value]) {
       citySel.options[citySel.options.length] = new Option(city, city);
     }
  }
  
  //City Changed
  citySel.onchange = function () {
    zipSel.length = 1; // remove all options bar first
    
    if (this.selectedIndex < 1)
      return; // done
    
    var zips = countryStateInfo[countySel.value][stateSel.value][this.value];
    for (var i = 0; i < zips.length; i++) {
      zipSel.options[zipSel.options.length] = new Option(zips[i], zips[i]);
    }
  } 
}

</script> 
<?php include "footer.php" ;?>
