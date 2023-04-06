
<?php 
 session_start(); 
 if(isset($_SESSION['uname']))
 { 
     session_destroy();
  echo "<script>if(confirm('Are You Sure Logout this Page')){document.location.href='index.php'};</script>";
  }
  ?>