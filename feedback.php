
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
*{box-sizing:border-box;}
body{font-family: 'Open Sans', sans-serif; color:#333; font-size:14px; background-color:#679f1b; padding:100px; text-align: center;}
.form_box{width:1000px; padding:20px; background-color:white; text-align: center; margin-left: 70px}

input{padding:5px;  margin-bottom:5px;}
input[type="submit"]{border:none; outlin:none; background-color:#679f1b; color:white;}
.heading{background-color:#679f1b; color:white; height:40px; width:100%; line-height:40px; text-align:center;}
.shadow{
  -webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);}
.pic{text-align:left; width:33%; float:left;}



</style>
<?php include 'menu.php'; ?>
<body>
<header >
          <div class="mr-right">
            <nav class="site-navigation position-relative text-right" role="navigation" style="margin-top:-30px; margin-left:-150px; margin-right:-150px;">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <li><a href="#" class="nav-link text-left">Home</a><br></li>
                 <li> <a href="register.php" class="nav-link text-left" style="margin-right">Back</a></li>
				 
				 
              </ul>
			  </li>
            </nav>
          </div>        
</header>

 <div class="form_box shadow">
 <form method="post" action="feedbackprocess.php">
 <div class="heading">
   Student Feedback Form
 </div><br>
 

 <tr><th>
					<div class="col-md-12 form-group" >
                 <label for="name" style=" margin-right:70px">Name of the Student :</label>
                        <input type="text" name="name">
                    </div><br>
					<div class="col-md-12 form-group">
                        <label for="regno" style=" margin-right:125px">Register No :</label>
                        <input type="text" name="regno">
                    </div> <br> 
					 <div class="col-md-12 form-group">
                        <label for="fname" style=" margin-right:105px">Father’s Name :</label>
                        <input type="text" name="fname"> 
                    </div> <br>
					<div class="col-md-12 form-group">
                       <label for="dept" style=" margin-right:125px">Department :</label>
                        <input type="text" name="dept">
                    </div><br> 
					<div class="col-md-12 form-group">
                        <label for="semester" style=" margin-right:135px">Semester :</label>
                        <input type="text" name="sem"> 
                    </div> <br>
					<div class="col-md-12 form-group">
                       <label for="conductno" style=" margin-right:120px">Conduct No :</label>
                        <input type="text" name="mnumber">
                    </div><br> 
					<div class="col-md-12 form-group">
                        <label for="email" style=" margin-right:155px">Email :</label>
                        <input type="text" name="email"> 
                    </div>
					</th> </tr>
 <br/>
 
<br>
<div>
 <label style=" margin-right:50px">What do you think about the quality of our blog?</label>
     <input type="radio" name="quality" value="0"> Bad
     <input type="radio" name="quality" value="1"> Okay
     <input type="radio" name="quality" value="2"> Good
   </div>
 <br/>
 <div>
 <label style=" margin-right:150px">Do you have any suggestion for us? </label>
 <textarea name=" suggestion1" rows="4" cols="40"></textarea><br> <br> </div>
  <label style=" margin-right:25px">Did the Scholarship Fund help you during your studies? </label>
 <textarea name=" suggestion2" rows="4" cols="40"></textarea><br> <br>
  <label style=" margin-right:75px">Any Suggestions for the Scholarship Program. </label>
 <textarea name=" suggestion3" rows="4" cols="40"></textarea><br> <br> <br>

  <input type="submit" name="submit" value="Submit Form">
</form>
 </div>

 </center> 
</body>

<div class="row">            
            <div class="col-lg-1 col-md-1 col-sm-1" style="min-height: 50px;margin-left:-100px; margin-right:-100px ;text-align: center;background-color: #10AADF; color:white; font-weight: bold;">
			<p style="margin-top: 40px;margin-bottom:1px; "> <br>Copyright © 2021 , All Rights Reserved. Powered by Rubankumar S - MCA., </p>
            </div></div></body>
</html>