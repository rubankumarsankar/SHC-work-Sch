<?php
session_start();
  $conn=mysqli_connect("localhost","root","","academics");
  if(!$conn)
  {
      die("Database not connected:".mysqli_error());
  }
  ?>
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
  margin: auto;
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
  background-color: #717171;
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
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>
<style>
bodcy {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #60F370; 
background-color: #60F370;
  margin-top: 50px;
  margin-bottom: 50px;
  margin-left: 400px;
  margin-right: 400px;
  width: 50%;
  }

input[type=text], input[type=password] {
  width: 50%;
  padding: 15px 5px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
   margin-top: 20px;
  margin-bottom: 20px;
  margin-left: 70px;
  margin-right: 50px;
}

button {
  background-color: #10AADF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
 margin-top: 20px;
  margin-bottom: 20px;
  margin-left: 200px;
  margin-right: 150px;
}


span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}
</style>
</head>
<body>
<div>//</div>


<?php include 'menu.php'; ?>
<div>
<header >
          <div class="mr-right">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <li><a href="index.php" class="nav-link text-left">Home</a><br></li>
                 <li> <a href="adminlogin.php" class="nav-link text-left">Admin</a></li>
              </ul>
			  </li>
            </nav>
          </div>        
</header>
</div>
 <center><h2 style="color:#EE1616;"><b>Staff Login</b></h2>
		<div style="margin-top:-10px;" class="hidden-xs"><h4 style="color:#000066; margin-top:-10px;"><b>Staff can only login this page.</b></h4>
				<h4 style="color:#000066; margin-top:-10px;">            
		</div>
		</center>
	
	   <div class="container">
<div class="row">  <form action="staffLogProcess.php" method="post">
                        <div class="col-md-12 form-group">
                            <label for="username" ><div style="font-weight: bold; margin-left:40px;">Username :</label>
                            <input type="text" id="username" name="username" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword"><div style="font-weight: bold; margin-left:40px;">Password :</label>
                            <input type="password" id="pword" name="password" class="form-control form-control-lg">
                        </div>
                        <div class="row">
                        <div class="col-md-5">
                           <button type="submit" value="Log In" name="submit"> <div style="font-weight: bold;">LOG IN </div></button>
						</div></div></form>
                </div></div></div>
</body>
<body>
<div>//</div>
<div class="row">            
            <div class="col-lg-1 col-md-1 col-sm-1" style="min-height: 50px;margin-bottom:auto;text-align: center;background-color: #10AADF; color:white; font-weight: bold;">
			<p style="margin-top: 40px;margin-bottom:40px;"> <br>Copyright © 2021 , All Rights Reserved. Powered by Rubankumar S - MCA., </p>
            </div></div>
</body>
</body>
</html>

  
 
  
  
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="index.php" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="entrypage.php" class="nav-link text-left">Attendance Entry</a>
                </li><li> 
                  <a href="deletepage.php" class="nav-link text-left">Delete Entry</a>
                </li>
				     <li>
                  <a href="logout1.php" class="nav-link text-left">Log out</a>
                </li>
              </ul>                                                                                                                                                                                                                                                                                        </ul>
            </nav>

          </div>
        </div>
      </div> 
 </header>

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Delete Entry page </h2>
              <p></p>
              </div>
          </div>
        </div>
      </div> 
   
    <div class="site-section">
        <div class="container">
       
             <div class="row justify-content-center">
                <div class="col-md-5">
                <div class="row">
                  <form action="deleteprocess.php" method="post">
                  <div id="example">
                    <div class="col-md-12 form-group">                     
                        <label>Delete Entries</label>
                        </div>
                        <div class="col-md-12 form-group"> 
                         <input type="date" name="date" class="form-control form-control-lg">
                    </div>                                                          
                      <div class="col-md-12 form-group">
                        <label>Work place:</label>
                       <select id="plcae" name="place" class="form-control form-control-lg">
                       <option>--place--</option>
                       <option value="garden">garden</option>
                       <option value="library">library</option> 
                       <option value="school">school</option> 
                       </select>
                    </div>
                      <!--<div class="col-md-12 form-group"> 
                       <label> Hours </label><br>  
                     <input type="checkbox" name="1" value="1">      
                       <input type="checkbox" name="1.30" value="1.30">   
                        <input type="checkbox" name="2" value="2">   <br> 
                      <label for="1">1</label>  <label for="1.30">1.30</label> <label for="2">2</label> 
                    </div>-->
                      <div class="col-md-12 form-group"> 
                       <label> Student list </label><br>  
                       <input type="checkbox" name="name" value="001"> <label>001</label>   
                       <input type="checkbox" name="name" value="002"> <label>002</label> 
                        <input type="checkbox" name="name" value="003"> <label>003</label>
                     </div>  
                      <div class="row">
                        <div class="col-20">
                          <input type="submit" name="submit" value="Remove" class="btn btn-primary btn-lg px-2">
                         </div>                                           
                         
                      </div>                                  
                     </form>    
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>              
                  </div>
                   
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>