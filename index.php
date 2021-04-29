
<?php include "header.php";
session_start();

?>
<?php global $msg; echo $msg;?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
  <link
    rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
    type="text/css"
  />
</head>
<style type="text/css">
 #myVideo {
  
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

      /* Set the size of the div element that contains the map */
     
</style>

<div class="w3-content" style="max-width:2200px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
   <video autoplay muted loop id="myVideo">
  <source src="rain1.mp4" type="video/mp4" >
</video>
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     
      
    </div>
  </div>
  


  <!-- The Band Section -->

  <div class="w3-container  w3-content w3-card-4 w3-white  w3-padding-64" style="max-width:600px;margin-left: 500px;margin-top: 100px;margin-bottom: 100px;" id="about" >
    <h2 class="w3-wide">THE VOTING</h2>
    <p class="w3-opacity"><i>Voting is all our rights </i></p>
    <p class="w3-justify"> voting systems are software platforms used to securely conduct votes and elections. As a digital platform, they eliminate the need to cast your votes using paper or having to gather in person.
They also protect the integrity of your vote by preventing voters from being able to vote multiple times.
Many secure voting platform vendors provide supportive vote management consulting services that help organizations design and implement their voting procedures.
These services help organizations save time, stick to best practices, and meet internal requirements and/or external regulations, such as third-party vote administration needs.</p>
    
    </div>
  
   

<div class="w3-container" style="margin-left: 350px" id="contact">

      <div class="form">
        <div class="contact-info">
          <h3 class="title">Instructions</h3>
          <p class="text">
            If any queries please do contact here and please be free to touch
            with us
          </p>

          <div class="info" >
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>BANGLORE</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>yogeshas91889@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>6361285589</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f" style="margin-top: 10px;"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter" style="margin-top: 10px;"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram" style="margin-top: 10px;"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in" style="margin-top: 10px;"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form" >
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="contact.php"   method="post">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="username" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" name="submit" />
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  
  
    
<!-- End Page Content -->
</div>
<!-- Footer -->



<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
 
<?php include "footer.php";?>
