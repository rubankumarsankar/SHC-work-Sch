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
  background-color: #ffff;
  border-radius: 100%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #ffff;
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
form {border: 3px solid #ffff; 
background-color: #ffff;
  margin-top: 50px;
  margin-bottom: 50px;
  margin-left: 200px;
  margin-right: 200px;
  width: 50%;
  hight: 50%;
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
.dropdown-content {
  width: 200px;
  height: 30px;
  border: 1px solid rgb(173, 172, 172);
}
</style>
</head>
<body>



<?php include 'menu.php'; ?>
 <?php  if(isset($_SESSION['username']))
      {
        echo "<h4> Welcome"  .$_SESSION['username'];
      }
      else{
        echo"undefined";
      } ?>
<div>
<header >
          <div class="mr-right">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <li><a href="attendancepage.php" class="nav-link text-left">Home</a><br></li>
                 <li> <a href="entrypage.php" class="nav-link text-left">Attendance Entry</a></li>
				 <li><a href="attendancepage.php" class="nav-link text-left">Back</a><br></li>
              </ul>
			  </li>
            </nav>
          </div>        
</header>
</div>
 <center><h2 style="color:#EE1616;"><b> Attendance Entry page </b></h2>
		<div style="margin-top:-10px;" class="hidden-xs"><h4 style="color:#000066; margin-top:-10px;"><b>.</b></h4>
				<h4 style="color:#000066; margin-top:-10px;">            
		</div>
		</center><br>
		<fieldset style="margin-left:200px; margin-right:200px;">
		<center <br>
                  <div id="example"> <form action="entryprocess.php" method="post"> 
                  <div class="row">
				   <div class="col-md-6 form-group">
                           <label for="--Department--" style="margin-left:-90px">Department :</label>
                            <select style="margin-left:50px;" id="--Department--" name="dept" placeholder="--Department--" class=".dropdown-content">
                            <option>--Department--</option>
                                <option value="MCA">MCA</option>
                                <option value="MBA">MBA</option>
                                <option value="MSW">MSW</option> 
                                <option value="M.SC">M.sc Computer Science</option> 
                                <option value="M.SC">M.sc Mathematics</option> 
                                <option value="M.SC">M.sc Physics</option> 
                                <option value="M.SC">M.sc pshychology</option> 
                            </select>
                           </div> 
<br><br>						  
                  <div class="col-md-6 form-group">                    
                        <label style="margin-left:-143px">Attendance Date :</label>
                         <input style="margin-left:50px;" type="date" name="workdate"  class="form-control form-control-lg">
                    </div> <br><br>
                                                                            
                      <div class="col-md-6 form-group">
                        <label style="margin-left:-129px">Work place:</label>
                       <select style="margin-left:100px;" id="plcae" name="workplace" class="form-control form-control-lg">
                       <option >--Place--</option>
                       <option value="garden">Garden</option>
                       <option value="library">Library</option> 
                       <option value="school">School</option> 
                       </select>
                    </div><br><br>
                    
                    
                              <div class="col-md-12 form-group"> 
                              <label> Hours :</label>  
                              <input style="margin-left:50px;" type="checkbox" name="hours" value="1">  <label for="1">1 hr</label>      
                              <input style="margin-left:20px;"type="checkbox" name="hours" value="1.30">  <label for="1.30">1.30 hr</label> 
                              <input style="margin-left:20px;"type="checkbox" name="hours" value="2">  <label for="2">2 hr</label>  <br> 
                             
                            </div>
							<br><br>
                            <div class="col-md-12 form-group"> 
                              <table><label style="margin-left:-129px"> Student Reg No  :</label>  
                              <input style="margin-left:50px;"type="checkbox" name="list1" value="001"> <label>001</label>   
                              <input style="margin-left:20px;"type="checkbox" name="list2" value="002"> <label>002</label> 
                              <input style="margin-left:20px;"type="checkbox" name="list3" value="003"> <label>003</label> <br><br>
							  <input style="margin-left:50px;"type="checkbox" name="list4" value="004"> <label>004</label>   
                              <input style="margin-left:20px;"type="checkbox" name="list5" value="005"> <label>005</label> 
                              <input style="margin-left:20px;"type="checkbox" name="list6" value="006"> <label>006</label><br><br>
							  <input style="margin-left:50px;"type="checkbox" name="list7" value="007"> <label>007</label>   
                              <input style="margin-left:20px;"type="checkbox" name="list8" value="008"> <label>008</label> 
                              <input style="margin-left:20px;"type="checkbox" name="list9" value="009"> <label>009</label><br><br>
							  <input style="margin-left:50px;"type="checkbox" name="list10" value="010"> <label>010</label>   
                              <input style="margin-left:20px;"type="checkbox" name="list11" value="011"> <label>011</label> 
                              <input style="margin-left:20px;"type="checkbox" name="list12" value="012"> <label>012</label><br><br>
							  <input style="margin-left:50px;"type="checkbox" name="list13" value="013"> <label>013</label>   
                              <input style="margin-left:20px;"type="checkbox" name="list14" value="014"> <label>014</label> 
                              <input style="margin-left:20px;"type="checkbox" name="list15" value="015"> <label>015</label>
                            </div> </table>
								<br><br>
                            <input type="submit" name="submit" style="font-weight: bold" value="Submit">
                            </div>
							</form>
                            </div>                       
                     </div> <div action="view.php" method ="post"><div class="row-100">
                        
                      </div>                       
                     </div>					 
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
				  </center>
                  </fieldset>              
                    </div>
<body>

<div class="row">            
            <div class="col-lg-1 col-md-1 col-sm-1" style="min-height: 50px;margin-bottom:auto;text-align: center;background-color: #10AADF; color:white; font-weight: bold;">
			<p style="margin-top: 100px;margin-bottom:40px;"> <br>Copyright © 2021 , All Rights Reserved. Powered by Rubankumar S - MCA., </p>
            </div></div>
</body>
</body>
</html>

       
                  