 <?php  
 session_start();
 $uname=$_POST['uname'];
    $pwd=$_POST['pwd']; 
if(isset($_POST['submit']))
{
$conn=mysqli_connect("localhost","root","","academics");
if(!$conn)
{
    die("Database not connected:".mysqli_error());
}
$sql = "SELECT * FROM student where uname='$uname' and pwd='$pwd'";
$result=(mysqli_query($conn,$sql));
while($row=mysqli_fetch_array($result))
{
    $r=$row['uname'];
    $b=$row['pwd'];
}
if($uname==$r && $pwd=$b)    
        {        
           
            header("location:register.php");
            echo "<script>alert('Save password')</script>";
            $_SESSION['uname']=$r;
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