

<?php
 session_start(); 
  $conn=mysqli_connect("localhost","root","","academics");
  if(!$conn)
  {
      die("Database not connected:".mysqli_error());
  }
if(isset($_POST['register']))
{ 
$name=$_POST['name'];
$regno=$_POST['regno'];
$dept=$_POST['dept'];
$gender=$_POST['gender'];
$acyear=$_POST['acyear'];
$semester=$_POST['semester'];
$dob=$_POST['dob'];
$fname=$_POST['fname'];
$occupation=$_POST['occupation'];
$mname=$_POST['mname'];
$income=$_POST['income'];
$email=$_POST['email'];
$mobile=$_POST['mobileno'];
$mob=$_POST['mob'];
$address=$_POST['address'];
$option=$_POST['option'];
 $sql = "INSERT INTO registration( name,regno,dept,gender,acyear,semester,dob,fname,occupation,mname,income,email,mobileno, mob, address, option) 
	VALUES ('$name','$regno','$dept','$gender',$acyear,$semester,'$dob','$fname','$occupation', '$mname',$income,'$email',$mobile,$mob,'    $address','$option')";
if(mysqli_query($conn,$sql))
{
    if(mysqli_affected_rows($conn)>0)
    {
        echo "<script>if(confirm('Register Successfully')){document.location.href='register.php'};</script>";
    }
    
}
else
{
echo "error " . mysqli_error($conn);
}
    
}
mysqli_close($conn);
?>