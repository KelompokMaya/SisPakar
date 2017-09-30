<?php
session_start();
ob_start("ob_gzhandler");
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="../template/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>SISTEM</b>PAKAR</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

  
    <p class="login-box-msg">Silakan Masuk </p>
   

    <div id="alert_login" style="display: none;" class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                
               username atau password salah!!
              </div>

 

    <form role="form"  method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required autofocu>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <div class="social-auth-links text-center">
        
          <a href="pakar/login_pakar.php" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-user"></i> Masuk Sebagai Pakar</a>
          
        </div>

    
    <a href="registrasi.php" class="text-center">Daftar menjadi member</a>

  </div>
  
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="../template/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../template/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../template/plugins/iCheck/icheck.min.js"></script>

</body>
</html>

<?php
        
        if(isset($_POST['login'])){
          include("../database/koneksi.php");
          
          $username = $_POST['username'];
          $password = md5($_POST['password']);
          


          
          $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password' ");
          $row = mysqli_fetch_assoc($query);
          if(mysqli_num_rows($query) == 0 ){
            
           echo ' <script type="text/javascript">
            $("#alert_login").css("display","block");
              $(window).load(function() { $("#alert_login").fadeOut(3300); })
            </script> ';


             } else if ($row['level']=='user') {
               
                $_SESSION['username']=$row['username'];
                $_SESSION['pertanyaan']=0;
                $_SESSION['level']='user';
                



                header("Location: index.php");
          
          
          } else{
             echo ' <script type="text/javascript">
            $("#alert_login").css("display","block");
              $(window).load(function() { $("#alert_login").fadeOut(3300); })
            </script> ';
          }
          
          
        
      }

        ?>

