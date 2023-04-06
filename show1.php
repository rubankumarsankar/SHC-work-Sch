<?php
	session_start();
 $uname=$_SESSION['uname'];
$conn=mysqli_connect("localhost","root","","academics");
if(!$conn)
{
    die("Database not connected: " . mysqli_error());
}  
?>

<!DOCTYPE html>

<html>
	<head>
		
		<style type="text/css">
		.container
		{
			width:1000px;
			min-height:1000px;
			margin:0 auto;
			//color:white;
			//background:red;
		}
		.banner{
			width:100%;
			height:500px;
			background-image:url('images/background.jpg');
			image-size:cover:
		}
		.page-header{
			padding:10px;
			border-bottom:1px solid teal;
			font-size:25px;
			margin-bottom:25px;
		}
		.frm{
			width:100%;
         
		}
		.frm label{
			color:teal;
			display:block;
			margin-bottom:15px;
            font-family:15px;
		}
		
		fieldset{
			padding:20px;
			color:teal;
			font-size:20px;
			border:none;
            
			-webkit-box-shadow: 0px 9px 9px 6px rgba(0,0,0,0.23);
			-moz-box-shadow: 0px 9px 9px 6px rgba(0,0,0,0.23);
			box-shadow: 0px 9px 9px 6px rgba(0,0,0,0.23);
		}
		legend{
			font-size:20px;
			font-weight:bold:
		}
		.color{
			color:lightgreen;
		}
		</style>
		
	</head>
	
	<body>
		

		

        <?php
                $sql = "SELECT * FROM registration"; //WHERE uname='$uname'";
               $result=mysqli_query($conn,$sql);
                $row= mysqli_fetch_assoc($result);
                	
		?>
		
		<div class='container'>
		<h3 class='page-header'> <i class="fa fa-users"></i>Welcome <?php echo $_SESSION["uname"];?> </h3>
			<div class="frm">
			<fieldset>
			<legend>Student Details</legend>
			<?php 
while($row=mysqli_fetch_array($result))
{
?> 
              <label>Name :<b class='color'> <?php echo $row['name'];?></label></b>
				
				<label>Regno : <b class='color'><?php echo $row['regno'];?> </label></b>

				<label>Gender : <b class='color'><?php echo $row['gender'];?></label></b>

				<label>Acyear:<b class='color'> <?php echo $row['acyear'];?></label></b>
				
				<label>Semester: <b class='color'><?php echo $row['semester'];?></label></b>
				
				<label>DOB: <b class='color'><?php echo $row['DOB'];?></label></b>
				
				<label>Father's Name : <b class='color'><?php echo $row['fname'];?></label></b>
				
				<label>Occupation : <b class='color'><?php echo $row['occupation'];?></label></b>
				
				<label>Mother's name :<b class='color'> <?php echo $row['mname'];?></label></b>
				
				<label>Annual Income :<b class='color'> <?php echo $row['income'];?></label></b>
						
				<label>Emali ID : <b class='color'><?php echo $row['email'];?></label></b>
				
				<label>Mobile No : <b class='color'><?php echo $row['mobileno'];?></label></b>
				
				<label>Parent's No :<b class='color'> <?php echo $row['mob'];?></label></b>
				
				<label>Address :<b class='color'> <?php echo $row['address'];?></label></b>
				
				<label>Previously worked :<b class='color'> <?php echo $row['option'];?></label></b>
<?php } ?>
</table><a href="adminpage.php"> Back </a><?php
mysqli_close($conn);
?>
             </form>
			</fieldset>
			</div>

		</div>
        
	</body>
</html>



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
        </div>
      </div> 
 </header>
	

        <?php   $conn=mysqli_connect("localhost","root","","academics");
if(!$conn)
{
    die("Database not connected: " . mysqli_error());
}  
                $sql = "SELECT * FROM registration"; //WHERE uname='$uname'";
               $result=mysqli_query($conn,$sql);
                //$row= mysqli_fetch_assoc($result);
                	
		?>
		
		<div class='container'>
		<h3 class='page-header'> <i class="fa fa-users"></i> </h3>
			<div class="frm">
			<fieldset>
			<legend>Student Details</legend>
			<table border="1">  <tr>  <th>Name</th> <th>Regno</th> <th>Gender</th> <th>Acyear</th> <th>Semester</th> <th>Date of Birth</th> <th>Father Name</th> <th>Occupation</th> <th>Mother Name</th> <th>Annual Income</th> <th>Email id</th> <th>MobileNo</th> <th>Phone</th> <th>Address</th> <th>Option</th> </tr>
			<?php 
while($row=mysqli_fetch_array($result))
{
?> 
    <tr><td> <?php echo $row['name'];?></td>
<td><?php echo $row['regno'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['acyear'];?></td>
<td><?php echo $row['semester'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['occupation'];?></td>
<td><?php echo $row['mname'];?></td>
<td><?php echo $row['income'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobileno'];?></td>
<td><?php echo $row['mob'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['option'];?></td>
</tr>         
<?php } ?>
</table><a href="adminpage.php"> Back </a><?php
mysqli_close($conn);
?>
             </form>
			</fieldset>
			</div>

		</div>