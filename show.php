<html><body><?php
 session_start(); 
 $uname=$_SESSION['uname'];
$conn=mysqli_connect("localhost","root","","academics");
if(!$conn)
{
    die("Database not connected: " . mysqli_error());
}  
$sql = "SELECT * FROM registration WHERE uname='$uname'";
$result=mysqli_query($conn,$sql);
?>
 <table border="1">  <tr>  <th>Name</th> <th>Regno</th> <th>Gender</th> <th>Acyear</th> <th>Semester</th>
				<th>Date of Birth</th> <th>Father Name</th> <th>Occupation</th> <th>Mother Name</th> 
				<th>Annual Income</th> <th>Email id</th> <th>MobileNo</th> <th>Phone</th> <th>Address</th>
				<th>Option</th> </tr>
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
</table><a href="register1.php"> Back </a><?php
mysqli_close($conn);
?>
</body></html>