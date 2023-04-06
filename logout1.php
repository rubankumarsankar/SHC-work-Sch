<?php 
 session_start(); 
 if(isset($_SESSION['username']))
 { 
    
  echo "<script>if(confirm('Are You Sure Logout this Page')){document.location.href='index.php'};</script>"; session_destroy();
  }
  ?>