<?php
        include_once('connection.php');
        
    if(isset($_POST['submit']))
    {
     
        $name = $_POST['name'];
        $regno = $_POST['regno'];
        $fname = $_POST['fname'];
        $dept = $_POST['dept'];
        $sem = $_POST['sem'];
        $mnumber= $_POST['mnumber'];
        $email= $_POST['email'];
        $quality = $_POST['quality'];
        $suggestion1 = $_POST['suggestion1'];
        $suggestion2 = $_POST['suggestion2'];
        $suggestion3 = $_POST['suggestion3'];
  
        $conn= mysqli_connect("localhost","root","");
        $db= mysqli_select_db($conn,"academics");

        $insertqry = mysqli_query($conn,"Insert into feedback (name,regno,fname,dept,sem,mnumber,email,quality,suggestion1,suggestion2,suggestion3) values('$name','$regno','$fname','$dept','$sem','$mnumber','$email','$quality','$suggestion1','$suggestion2','$suggestion3')") or die(mysqli_error($con));
        if($insertqry)
        {
            header('location:feedback.php');
        }
    }
?>
