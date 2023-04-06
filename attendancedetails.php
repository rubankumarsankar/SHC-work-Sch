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

.ftco-subscribe-1 {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative; }
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
                  <li><a href="#" class="nav-link text-left">Home</a><br></li>
                  <li><a href="#"  style="margin-right:20px">Attendance Details</a><br></li>
				   <li><a href="adminpage.php"  style="margin-right:20px">Back</a><br></li>
			
                </li>
              </ul>
            </li>
          </ul>
        </div>
                     
</header>
<center><h2 style="color:#EE1616;"><b>Attendance Details</b></h2>
		<div style="margin-top:10px;" class="hidden-xs"><h4 style="color:#000066; margin-top:-10px;"><b>Students</b></h4>
				<h4 style="color:#000066; margin-top:-10px;">            
		</div>
		</center>

<body>
<center>
<?php   $conn=mysqli_connect("localhost","root","","academics");
if(!$conn)
{
    die("Database not connected: " . mysqli_error());
}  
                $sql = "SELECT * FROM attendance"; //WHERE uname='$uname'";
               $result=mysqli_query($conn,$sql);
                //$row= mysqli_fetch_assoc($result);
                	
		?>
		
		
			<table border="2">  
        <tr> 
          <th>Department</th>
          
           <th>Work Date</th>
            <th>Work Place</th>
             <th>Hours</th> 
             <th>List 1</th>
              <th>List 2</th>
               <th>List 3</th> 
               <th>List 4</th>
               <th>List 5</th>
			<?php 
while($row=mysqli_fetch_array($result))
{
?> 
    <tr>
	<td><?php echo $row['dept'];?></td>

<td><?php echo $row['workdate'];?></td>
<td><?php echo $row['workplace'];?></td>
<td><?php echo $row['hours'];?></td>
<td><?php echo $row['list1'];?></td>
<td><?php echo $row['list2'];?></td>
<td><?php echo $row['list3'];?></td>
<td><?php echo $row['list4'];?></td>
<td><?php echo $row['list5'];?></td>

</tr>       
<?php
 } ?>

 
</table><br> <br> 

 
<?php
mysqli_close($conn);
?>
</center>



<div class="row">            
            <div class="col-lg-1 col-md-1 col-sm-1" style="min-height: 50px;margin-bottom:auto;text-align: center;background-color: #10AADF; color:white; font-weight: bold;">
			<p style="margin-top: 400px;margin-bottom:40px;"> <br>Copyright © 2021 , All Rights Reserved. Powered by Rubankumar S - MCA., </p>
            </div>            
</div>
</body>

</html>