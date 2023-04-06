
<?php 
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
   $conn=mysqli_connect("localhost","root","","academics");
   if(!$conn)
  {
    die("Database not connected:".mysqli_error());
  }
 $sql = "SELECT * FROM student where uname='$uname' and pwd='$pwd'";
 $result=mysqli_query($sql,$conn); 
 $row=mysqli_fetch_assoc($result);
    if($row['uname']==$uname && $row['pwd']==$pwd)
    {  echo "<h1> Welcome ".$row['uname']."</h1>"; 
        header("location:register.php");            
        echo "<script>alert('Save password')</script>";
    }
    else
    {
        echo "<script>alert('Invalid User!')</script>";    
} 
?>