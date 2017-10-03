<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>SISTEM</b>PAKAR</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registrasi Member Baru</p>
      
      <div id="alert_username" style="display: none;" class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
        </button>username sudah terdaftar!
      </div>

      <div id="alert_email" style="display: none;" class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
        </button>email sudah terdaftar!
      </div>
       

    <form  method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nama" placeholder="Full name">
        <span class="glyphicon glyphicon-edit form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div style=" border-style: solid; border-width: 5px; border-color: #e6e8ed; " class="box-body">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="registrasi" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    

    <a href="login.php" class="text-center">Sudah memiliki akun</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="../template/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../template/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../template/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>


<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
        <script type="text/javascript" src="sweetalert-master/dist/sweetalert.min.js"></script>

        <?php

include "../database/koneksi.php";

        if(isset($_POST['registrasi']))
        {
          $nama                = $_POST['nama'];
          $email               = $_POST['email'];
          $username            = $_POST['username'];
          $password            = md5($_POST['password']); 
          $level               = 'user';
          $status              = 'nonaktif';
          
         
          $cek_username= mysqli_query($koneksi,"  SELECT username FROM user WHERE username ='$username'") or die(mysqli_error($koneksi));
          $cek_email= mysqli_query($koneksi,"  SELECT email FROM user WHERE email ='$email'") or die(mysqli_error($koneksi));
          
          if (mysqli_num_rows($cek_username) != 0) {
                       
            echo ' <script type="text/javascript">
            $("#alert_username").css("display","block");
              $(window).load(function() { $("#alert_username").fadeOut(3800); })
            </script> ';
      
          }
          else if (mysqli_num_rows($cek_email) != 0) {

            echo ' <script type="text/javascript">
            $("#alert_email").css("display","block");
              $(window).load(function() { $("#alert_email").fadeOut(3800); })
            </script> ';
            
          }
          else {
            $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,username,password,level,status) VALUES('$nama','$email','$username','$password','$level','$status')") or die(mysqli_error($koneksi));
              if($insert)
              { 
                 echo '<script>
              setTimeout(function() {
                  swal({
                      title: "Pendaftara Berhasil!",
                      
                      type: "success"
                  }, function() {
                      window.location = "../success_registrasi.html";
                  });
              });
          </script>';

              }
            else
              {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Gagal..!</div>';
              }
          }

          
            

        }
        
      ?>
 