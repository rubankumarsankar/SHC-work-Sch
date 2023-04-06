
<?php
 //session_start(); 
 //$_SESSION['username']=$username;
$conn=mysqli_connect("localhost","root","","academics");
if(!$conn)
{
    die("Database not connected: " . mysqli_error());
}  /*if(isset($_POST['submit'])){ $workdate=$_POST['workdate'];
$sql = "DELETE * FROM attendance WHERE workdate='$workdate'";
$result=mysqli_query($conn,$sql);
?> <fieldset>
 <table border="1">  <tr>  <th>Date</th> <th>Workplace</th> <th>Hours</th> <th>StudentList</th> 
<?php 
while($row=mysqli_fetch_array($result))
{
?> 
<tr><td> <?php echo $row['workdate'];?></td>
<td><?php echo $row['workplace'];?></td>
<td><?php echo $row['hours'];?></td>
<td><?php echo $row['list1'];?> <?php echo $row['list2'];?> <?php echo $row['list3'];?></td> <!--</td></td><td></td>-->
</tr>  
<?php } ?> 
</table>  <?php
//mysqli_close($conn);}*/  $workdate=$_POST['workdate']; $sql="DELETE FROM attendance WHERE workdate ={["$workdate"]}";
   
   if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
   } else {
      echo "Error deleting record: " . mysqli_error($conn);
   }
  
 /*$sql = " DELETE * FROM attendance WHERE $workdate='workdate'"; if(list1.checked==true)
 {
     $sql="UPDATE attendance SET list1='$list1'";
     if(mysqli_query($conn,$sql))
     {
         if(mysqli_affected_rows($conn) > 0)
         {
         echo "<script>alert('Applyied Successfully!')</script>";
         }
     }
 }

 elseif(list2.checked==true)
 {
     $sql="UPDATE attendance SET list2='$list2'";
     if(mysqli_query($conn,$sql))
     {
         if(mysqli_affected_rows($conn) > 0)
         {
         echo "<script>alert('Applyied Successfully!')</script>";
         }
     }	
 }

 elseif(list3.checked==true)
 {
     $sql="UPDATE attendance SET list3='$list3'";
     if(mysqli_query($conn,$sql))
     {
         if(mysqli_affected_rows($conn) > 0)
         {
         echo "<script>alert('Applyied Successfully!')</script>";
         }
     }	
 }*/
    //header("Location:view.php");
mysqli_close($conn);
?> </div>
 </fieldset> 
                  </div>              
                    </div>