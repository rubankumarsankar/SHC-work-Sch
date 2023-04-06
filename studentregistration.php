<?php
          session_start(); 
          if($_SESSION['uname'])
          {
            echo "<h4> Welcome"  .$_SESSION['uname'];
          }
          else{
            echo"undefined";
          }  
         ?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>



<?php include 'menu.php'; ?>
<div>
<header >
          <div class="mr-right">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <li><a href="register.php" class="nav-link text-left">Home</a><br></li>
                 <li> <a href="studentregistration.php" class="nav-link text-left">Registration</a></li>
				 <li> <a href="register.php" class="nav-link text-left">Back</a></li>
				 
              </ul>
			  </li>
            </nav>
          </div>        
</header>
</div>
 <center><h2 style="color:#EE1616;"><b>Registration Form</b></h2>
		<div style="margin-top:-10px;" class="hidden-xs"><h4 style="color:#000066; margin-top:-10px;"><b>Student can build our future.</b></h4>
				<h4 style="color:#000066; margin-top:-10px;">            
		</div>
		</center>
	<style>
	.flex-container
{
  margin-left: 20px;
}
.flex-row
{
  display: block;
  margin-top: 20px;
  }
  input{
  width: 200px;
  height: 30px;
  border: 1px solid rgb(173, 172, 172);
}
.dropdown-content {
  width: 200px;
  height: 30px;
  border: 1px solid rgb(173, 172, 172);
}
.textarea-mime_content_type{
  width: 200px;
  height: 100px;
  border: 1px solid rgb(173, 172, 172);
}

  .input[type=radio] 
  {
    border: 0px;
    width: 50%;
    height: 2em;

}

}


	</style>
	
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<fieldset style="margin-left:200px; margin-right:200px;">   
   <div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="row">
                  <form action="registration.php" method="post">
                    <tr>
                    <div class="flex-row">
                        <label for="name">Name of the Student:</label>
                        <input type="text" name="name" class="form-control form-control-lg">
                    </div>
                    <div class="flex-row">
                        <label for="regno">Student Reg no:</label>
                        <input type="text" name="regno" class="form-control form-control-lg">
                      </div>
                    
						<div class="flex-row">
                           <label for="--Department--">Department:</label>
                            <select id="--Department--" name="dept" placeholder="--Department--" class="dropdown-content">
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
                          
                      <div class="input[type=radio] ">
                        <label for="gender">Select a Gender:</label> <br>
                        <input type="radio" name="gender"  value="male" >Male
                        <input type="radio" name="gender"  value="female" >Female
                        <input type="radio" name="gender" value="other">Other <br> 
                        </div>
                        
                        <div class="flex-row">
                        <label for="--Acyear--">Academic Year:</label>
                       <select id="acyear" name="acyear" placeholder="--Acyear--" class="dropdown-content">
                       <option>--Acyear--</option>
                       <option value="2019">2022</option>
                       <option value="2018">2021</option> 
                       <option value="2017">2020</option> 
                       </select>
                       </div>

                         <div class="flex-row">
                           <label for="--semester--">Semester:</label>
                            <select id="--semester--" name="semester" placeholder="--semester--" class="dropdown-content">
                            <option>--Semester--</option>
                                <option value="1">1</option>
                                <option value="2">2</option> 
                                <option value="3">3</option> 
                                <option value="4">4</option> 
                                <option value="5">5</option> 
                                <option value="6">6</option> 
                            </select>
                           </div>                           

                            <div class="flex-row">
                            <label for="DOB">Date of Birth:</label>
                            <input type="date" name="dob" class="form-control form-control-lg"> 
                          </div>

                          <div class="flex-row">
                            <label for="fname">Father's Name:</label>
                             <input type="text" name="fname" class="form-control form-control-lg" required> 
                            </div>

                            <div class="flex-row">
                             <label for="mname">Mother's Name:</label>
                             <input type="text" name="mname" class="form-control form-control-lg" required> 
                            </div>

                            <div class="flex-row">
                             <label for="ocup">Father's Occupation:</label>
                            <input type="text" name="occupation" class="form-control form-control-lg" required> 
                          </div>

                          <div class="flex-row">
                            <label for="income">Annual Income :</label>
                             <input type="text" name="income" class="form-control form-control-lg" required>
                          </div>
                          
                          <div class="flex-row">
                            <label for="email">Email:</label>
                           <input type="email" name="email" class="form-control form-control-lg">
                           </div>

                            <div class="flex-row">
                            <label for="mobileno">Mobile Number: </label>
                            <input type="text" name="mobileno" class="form-control form-control-lg" required> 
                            </div>

                            <div class="flex-row">
                              <label for="mob">Parent's Number: </label>
                              <input type="text" name="mob" class="form-control form-control-lg" required> 
                              </div>

                              <div class="flex-row"> 
                              <label for="address">Address:</label>
                              <textarea rows="6" cols="25" name="address"  placeholder="address" class="textarea-mime_content_type" required></textarea>
                            </div>
                            
                            <div class="flex-row"> 
                            <label for="option">Previous semester worked:</label><br>
                            <input type="radio" name="option" value="yes" required> Yes
                           <input type="radio" name="option" value="No" required> No  
                          </div>

                            <div class="row">
                              <div class="col-10">
                                  <input type="submit" name="register" value="Register" style="min-height: 50px;margin-bottom:auto;text-align: center;background-color: #10AADF; color:white; font-weight: bold;" class="btn btn-primary btn-lg px-2">
                              </div>
                          </div>
</fieldset>						  
                     <?php //include("registration.php");?>    
                  </form>    
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
				  </body>
<body>
<div></div>
<div class="row">            
            <div class="col-lg-1 col-md-1 col-sm-1" style="min-height: 50px;margin-bottom:auto;text-align: center;background-color: #10AADF; color:white; font-weight: bold;">
			<p style="margin-top: 40px;margin-bottom:40px;"> <br>Copyright © 2021 , All Rights Reserved. Powered by Rubankumar S - MCA., </p>
            </div></div>
</body>
</html>