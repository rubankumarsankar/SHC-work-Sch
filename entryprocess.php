<?php
 session_start(); 
 //$_SESSION['username']=$username;
  $conn=mysqli_connect("localhost","root","","academics");
  if(!$conn)
  {
      die("Database not connected:".mysqli_error());
  }
if(isset($_POST['submit']))
{ $username=$_SESSION['username'];  
    $dept=$_POST['dept'];  
$workdate=$_POST['workdate'];
$workplace=$_POST['workplace'];

$hours=$_POST['hours'];
$list1=$_POST['list1'];
$list2=$_POST['list2'];
$list3=$_POST['list3'];
$list2=$_POST['list4'];
$list3=$_POST['list5'];
 $sql = "INSERT INTO attendance(dept,workdate,workplace,hours,list1,list2,list3,list4,list5) VALUES ('$dept','$workdate','$workplace',$hours,'$list1','$list2','$list3','$list4','$list5')"; /*if(list1.checked==true)
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
if(mysqli_query($conn,$sql))
{
    if(mysqli_affected_rows($conn)>0)
    {   
        echo "Register Successfully ";
    header("Location:entrypage.php");

    }
    
}
else
{
echo "error" . mysqli_error($conn);
}
    
}
mysqli_close($conn);
?>