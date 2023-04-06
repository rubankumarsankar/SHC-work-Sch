
//<?php
//    include_once 'adminsession.php';
 //   $uname = $_SESSION['email'];
   // $password = $_SESSION['password'];
   // $chekUser = mysqli_query($con,"Select * from user where email= '$uname' AND password = '$password'") or die(mysqli_error($con));
   // $row = mysqli_fetch_array($chekUser);
    //$fname = $row['fname'];
    //$lname = $row['lname'];
    
    //$username = $fname . " ".$lname;
    
//?>

<!DOCTYPE html>
<html style="height: auto; min-height: 100%">

<head>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/font-awesome.css" />
  <link rel="stylesheet" href="css/ionicons.css" />
  <link rel="stylesheet" href="css/AdminLTE.css" />
  <link rel="stylesheet" href="css/_all-skins.css" />
  <script src="css/jquery_003.js"></script>
  <script src="css/jquery-ui.js"></script>
  <script src="css/bootstrap.js"></script>
  <script src="css/adminlte.js"></script>

  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0" />
  <title>Sacred Heart College,Tirupattur</title>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/ico" />
  <meta name="description" content="Home Page - Educause" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="robots" content="index, follow" />
  <meta name="GOOGLEBOT" content="index, follow" />

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" />

  <script type="text/javascript" language="JavaScript" src="js/valid.js"></script>
  <script type="text/javascript" language="JavaScript" src="js/jquery-1.11.1.min.js"></script>

  <!--/webfonts-->

  <style>
    html,
    body {
      overflow-x: hidden;
      background-color: #f0f0f0;
      border-radius: 0 15px 15px 0;
    }

    table td {
      padding: 2%;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    .input-container {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      width: 100%;
      margin-bottom: 15px;
    }

    .icon {
      padding: 13px;
      background: dodgerblue;
      color: white;
      min-width: 50px;
      text-align: center;
    }

    .input-field {
      width: 100%;
      padding: 10px;
      outline: none;
      height: 40px;
    }

    .input-field:focus {
      border: 2px solid dodgerblue;
    }

    /* Set a style for the submit button */
    .btn {
      background-color: dodgerblue;
      color: white;
      padding: 15px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .navbar {
      /* -webkit-box-shadow: 20px 20px 20px #1abc9c;
        -moz-box-shadow: 20px 20px 20px #1abc9c;
        box-shadow: 20px 20px 20px #1abc9c; */
      z-index: 999;
      border: 2;
      border-color: #1abc9c;
    }

    .img-center {
      margin: 0 auto;
    }

    .error {
      color: red;
    }

    h2 {
      color: #ff0066;
      text-shadow: 0.5px 1px #000000;
    }

    h5 {
      color: #ff0066;
      text-shadow: 0.1px 1px #000000;
    }

    h6 {
      color: red;
      font-size: 12px;

      text-shadow: 0.1px 1px #000000;
    }

    .user-create {
      display: none;
    }

    .add-category {
      display: none;
    }
    .upload {
      display: none;
    }
    .fa-arrow-left {
      color: #3c8dbc;
    }
    .fa-lock {
      color: #3c8dbc;
    }
  </style>

  <script type="text/javascript">
    $(document).ready(function () {
      $("input[type=text]").bind("copy paste", function (e) {
        e.preventDefault();
      });
    });

    $(document).ready(function () {
      $("input[type=password]").bind("copy paste", function (e) {
        e.preventDefault();
      });
    });
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
  </script>

<script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }
        </script>
</head>

<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%">
  <div class="row" style="height: 112px">
    <nav class="navbar navbar-light" style="background-color: #ddeeff">
      <!-- Navbar content -->
      <div class="container">
        <div class="col-lg-1 col-sm-1 col-md-1 hidden-xs">
          <img style="float: left; width: 100px; height: 100px; margin-top: 10px" src="images/logo.png" />
        </div>
        <div style="margin-top: -10px" class="col-lg-10 col-sm-10 col-md-10">
          <center>
            <h2 style="color: #800000">
              <b>SACRED HEART COLLEGE (AUTONOMOUS)</b>
            </h2>
            <div style="margin-top: -10px" class="hidden-xs">
              <h4 style="color: #000066; margin-top: -10px">
                <b>Affiliated to Thiruvalluvar University, Vellore</b>
              </h4>
              <h4 style="color: #000066; margin-top: -10px">
                <b>Accredited by NAAC (4<sup>th</sup> Cycle − under RAF) with
                  CGPA of 3.31/4 at 'A+' Grade
                </b>
              </h4>
            </div>
          </center>
        </div>

        <div class="col-lg-1 col-sm-1 col-md-1 hidden-xs">
          <img style="float: left; width: 100px; height: 80px; margin-top: 10px" src="images/Layer 11.png" />
        </div>
      </div>
    </nav>
  </div>
  <div class="wrapper" style="height: auto; min-height: 100%">
    <header class="main-header">
      <a class="logo">
        <span class="logo-mini"><b>Document Manager</b></span>
        <span class="logo-lg"><b>Document Manager</b></span>
      </a>

      <nav class="navbar navbar-static-middle">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img id="ctl00_userImg" class="user-image" alt="User Image" src="./cssnew/user-login.png"
                  style="border-width: 0px" />
                <span id="ctl00_username"> Administrator </span>
              </a>
              <ul class="dropdown-menu">
              <li class="user-footer" style="padding-right: 50px;">
                  <div class="pull-left">
                  <i class="fa fa-lock"></i>
                    <a href="change_password.php" style="text-decoration:none">Change Password</a>
                  </div>
                  <div class="pull-right">
                  <i class="fa fa-arrow-left"></i>
                    <a href="logout.php" style="text-decoration:none">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">
      <section class="sidebar" style="height: auto">
        <ul class="sidebar-menu tree" data-widget="tree">
          <li class="active" style="height: auto">
            <a href="home.php">
              <i class="fa fa-dashboard"></i><span><strong>Home</strong></span>
              <!-- <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span> -->
            </a>
          </li>
          <li class="treeview" style="height: auto">
            <a href="#">
              <i class="fa fa-cog"></i>
              <span><strong>Admin</strong></span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none">
              <li>
                <a href="user_add.php" style="cursor: pointer;"><i class="fa fa-circle-o"></i><strong>Create
                    User</strong></a>
              </li>
             
              <li>
              <a href="addcategory.php" style="cursor: pointer;"><i class="fa fa-circle-o"></i><strong>Add
                    Category</strong></a>
              </li>
              <li>
                <a href="doc_setting.php"><i class="fa fa-circle-o"></i><strong>Document Setting</strong></a>
              </li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-th"></i><span><strong>Document Maintenance </strong></span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="upload.php"  style="cursor: pointer;"><i class="fa fa-circle-o"></i><strong>Upload Document</strong></a>
                <a onclick="showAddUpload()" style="cursor: pointer;"><i class="fa fa-circle-o"></i><strong>View Document</strong></a>
              </li>
              
              <!-- <li>
                  <a href="#"
                    ><i class="fa fa-circle-o"></i><strong></strong
                  ></a>
                </li> -->
            </ul>
          </li>
         
        </ul>
      </section>
    </aside>



    <div class="content-wrapper" style="min-height: 922.8px auto">
    </div>
    <footer class="main-footer" style="text-align: center; background-color: #3c8dbc;">
      <strong>Copyright &copy; 2021 Sacred Heart College. All rights reserved
        &#124; Powered by Dept. of BCA. </strong>
    </footer>
  </div>

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>