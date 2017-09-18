
<?php
session_start();
  include("database/koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="template/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <link rel="stylesheet" href="template/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="template/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="template/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="template/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="template/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="template/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="template/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="template/plugins/pace/pace.min.css">


</head>
<body class="hold-transition skin-blue sidebar-mini">
<img src="Images/Header.png" width="100%" />
<div class="wrapper">



  <header class="main-header">
    

    <!-- Logo -->
    <a style="background-color: #3C8DBC" class="logo">
     <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sistem</b>Pakar</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    
     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          
         
              <?php 
                  if (empty($_SESSION)) { ?>
              <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                  <a href="login.php" >
              <?php    
                echo 'Log In';
              } else
              {?>
               <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="template/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                    <span class="hidden-xs">
              <?php echo $_SESSION['username']; } ?></span> 

            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['username']; ?>
                  <small>Member</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="#" id="logout" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
       <?php 
                  if (empty($_SESSION)) { ?>
              <div class="user-panel">
                  
                  <div class="pull-left info">
              <?php
              } else
              {?>
               <!-- User Account: style can be found in dropdown.less -->
                <div class="user-panel">
                  <div class="pull-left image">
                    <img src="template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                    <p><?php echo $_SESSION['username'];  ?></p>
                    <a href="#"> USER</a>
                    <?php }  ?>
                  </div>
                </div>
             