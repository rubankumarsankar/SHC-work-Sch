<?php
 //session_start(); 
 //$_SESSION['username']=$username;
$conn=mysqli_connect("localhost","root","","academics");
if(!$conn)
{
    die("Database not connected: " . mysqli_error());
}
$sql = "SELECT * FROM attendance WHERE workdate='$workdate'";
$result=mysqli_query($conn,$sql);
?>
 <table border="1">  <tr>  <th>Date</th> <th>Workplace</th> <th>Hours</th> <th>StudentList</th> 
<?php 
while($row=mysqli_fetch_array($result))
{
?> 
<tr><td> <?php echo $row['workdate'];?></td>
<td><?php echo $row['workplace'];?></td>
<td><?php echo $row['hours'];?></td>
<td><?php echo $row['list'];?></td>
</tr>
<?php } ?>
</table> <?php
mysqli_close($conn);
?>
