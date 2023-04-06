<?php  
 session_start();
 $username=$_POST['username'];
 $password=$_POST['password']; 
if(isset($_POST['submit']))
{
$conn=mysqli_connect("localhost","root","","academics");
if(!$conn)
{
    die("Database not connected:".mysqli_error());
}
$sql = "SELECT * FROM staff where username='$username' and password='$password'";
$result=(mysqli_query($conn,$sql));
while($row=mysqli_fetch_array($result))
{
    $a=$row['username'];
    $c=$row['password'];
}
if($username==$a && $password=$c)    
        {        
           
            header("location:attendancepage.php");
            echo "<script>alert('Save password')</script>";
            $_SESSION['username']=$a;
        }
        else
        {
            echo "<script>alert('Invalid User!')</script>";
        }
    }
    else
    {
        echo "<script>alert('Username and Password is Incorrect!')</script>";
    }

    
?>