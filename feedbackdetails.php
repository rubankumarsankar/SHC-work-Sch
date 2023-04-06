<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1200px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 15px 2px;
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
table td {
      padding: 2%;
    }
th {
      color: #ffff;
      background-color: #3c8dbc;
      text-align: center; 
    vertical-align: middle;
    }
    td 
      {
    text-align: center; 
    vertical-align: middle;
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
                  <li><a href="#"  style="margin-right:20px">Feedback details</a><br></li>
                  <li><a href="adminpage.php"  style="margin-right:20px">Back</a><br></li>
                </li>
              </ul>
            </li>
          </ul>
        </div>
                     
</header>
<fieldset>
	  <center><h2 style="color:#EE1616;"><b>Feedback Details</b></h2>
		<div style="margin-top:10px;" class="hidden-xs"><h4 style="color:#000066; margin-top:-10px;"><b>Students</b></h4>
				<h4 style="color:#000066; margin-top:-10px;">            
		</div>
		</center>
	<?php   $conn=mysqli_connect("localhost","root","","academics");
if(!$conn)
{
    die("Database not connected: " . mysqli_error());
}  
                $sql = "SELECT * FROM feedback"; //WHERE uname='$uname'";
               $result=mysqli_query($conn,$sql);
                //$row= mysqli_fetch_assoc($result);
                	
		?>
	  <center>
	  <form>
    <div class="table-container">
			<table border="1"> <div style="margin-top :50px; margin-bottom : 30px; margin-left:80px;margin-right;50px"> 
			<tr>  
        <th>Name</th>
         <th>Reg No </th>  
         <th>Father name </th> 
         <th>Department</th> 
       <th>Semester</th>
        <th>Mobile No</th> 
         <th>Email id</th>  
       <th>What do you think about the quality of our blog?</th> 
       <th>Do you have any suggestion for us?</th> 
       <th>Did the Scholarship Fund help you during your studies?</th> 
       <th>Any Suggestions for the Scholarship Program.</th> 
    </tr> </div>
</div>
			<?php 
		while($row=mysqli_fetch_array($result))
{
?> 
    <tr><td> <?php echo $row['name'];?></td>
<td><?php echo $row['regno'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['dept'];?></td>
<td><?php echo $row['sem'];?></td>
<td><?php echo $row['mnumber'];?></td>
<td><?php echo $row['email'];?></td>

<td><?php echo $row['quality'];?></td>
<td><?php echo $row['suggestion1'];?></td>
<td><?php echo $row['suggestion2'];?></td>
<td><?php echo $row['suggestion3'];?></td>
</tr>         
<?php } ?>
</table>
<?php
mysqli_close($conn);
?>
</form>
  </center>
  </fieldset>
</body>
<body>
<div>//</div>
<div class="row">            
            <div class="col-lg-1 col-md-1 col-sm-1" style="min-height: 50px;margin-bottom:auto;text-align: center;background-color: #10AADF; color:white; font-weight: bold;">
			<p style="margin-top: 400px;margin-bottom:40px;"> <br>Copyright © 2021 , All Rights Reserved. Powered by Rubankumar S - MCA., </p>
            </div>            
</div>
</body>
</body>
</html>

  