<?php
        include_once('connection.php');
        
    if(isset($_POST['submit']))
    {
     
        $staffid = htmlentities(stripslashes(mysqli_real_escape_string($conn,$_POST['staffid'])));
        $username = htmlentities(stripslashes(mysqli_real_escape_string($conn,$_POST['username'])));
        $userid = htmlentities(stripslashes(mysqli_real_escape_string($conn,$_POST['userid'])));
        $password = htmlentities(stripslashes(mysqli_real_escape_string($conn,$_POST['password'])));
        $department = htmlentities(stripslashes(mysqli_real_escape_string($conn,$_POST['department'])));
        $type = htmlentities(stripslashes(mysqli_real_escape_string($conn,$_POST['type'])));
  
        
        $insertqry = mysqli_query($conn,"Insert into user (staffid,username,userid,password,department,type) values('$staffid','$username','$userid','$password','$department','$type')") or die(mysqli_error($con));
        if($insertqry)
        {
            header('location:user_add.php');
        }
    }
?>
