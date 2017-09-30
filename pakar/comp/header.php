
<?php
session_start();

if(empty($_SESSION)){
  header("Location: ../index.php");
}

if ($_SESSION['level']!='pakar') {
  header("Location: ../index.php");
}


?>
<?php
  include("../database/koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PAKAR</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../template/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../template/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../template/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../template/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../template/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../template/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../template/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../template/plugins/datatables/dataTables.bootstrap.css">
  



 
</head>
<body  class="hold-transition skin-green sidebar-mini">

           
<div   class="wrapper">

  <header  class="main-header">
    <!-- Logo -->
    <a style="background-color: green" href="index.php" class="logo">
     
      <span class="logo-mini"><b>P</b>K</span>
     
      <span class="logo-lg"><b>Pakar</b></span>

    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav style="background-color: green" class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
     
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          
          <li style="background-color: red" class="dropdown user user-menu">
             <a id="logout" href="#" class="dropdown-toggle">keluar</a>
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
      
      