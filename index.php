<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin-left: 20px;
  margin-top: -30px;
  
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/4 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 100%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: blue;
  margin-top:-20px;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 500px) {
  .text {font-size: 70px}
}
/* Centered text */
.centered {
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-weight: bold;
  color: #A19999;
  margin-left: 150px;
  
}

</style>
</head>
<body>


<?php include 'menu.php'; ?>
<div>

<header>
          <div class="mr-right">
            <nav class="site-navigation position-relative text-right" role="navigation" style="margin-top:-30px; margin-left:-50px; margin-right:-50px;">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
				  <li></li>
                  <li><a href="index.php" class="nav-link text-left">Home</a><br></li>
                  <li><a href="adminlogin.php" class="nav-link text-left">Admin</a></li>
                  <li><a href="stafflogin.php" class="nav-link text-left">Staff Login</a></li>
                  <li><a href="studentlogin.php" class="nav-link text-left">Student Login</a></li>
                  <li><a href="about.php" class="nav-link text-left">About</a></li>
			  </li>
			  </ul>
            </nav>
          </div>        
</header>
</div>

			<div class="slideshow-container">
			<div class="container">
			<div class="mySlides fade">
			  <div class="numbertext">1 / 4</div>
			  <img src="images/home2.jpg" style="width:1285px; height:550px;">
			  <div class="text"></div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">2 / 4</div>
			  <img src="images/home3.jpg" style="width:1285px;  height:550px;">
			  <div class="centered" style="font-size:60; opacity: 0.9;">SHC Work Scholership</div>
			  
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">3 / 4</div>
			  <img src="images/home4.jpg" style="width:1285px; height:550px;">
			  <div class="text"></div>
			</div>
			<div class="mySlides fade">
			  <div class="numbertext">4 / 4</div>
			  <img src="images/home5.jpg" style="width:1285px; height:550px;">
			  <div class="text"></div>
			</div>
			<br>

			<div style="text-align:center; margin-left:325px;">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
			</div>
			</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div class="row">            
            <div class="col-lg-1 col-md-1 col-sm-1" style="min-height: 50px;margin-bottom:auto;text-align: center;background-color: #10AADF; color:white; font-weight: bold;">
			<p style="margin-top: 10px;margin-bottom:40px;"> <br>Copyright © 2021 , All Rights Reserved. Powered by Rubankumar S - MCA., </p>
            </div>    
</body>
</html>
