
<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
        <script type="text/javascript" src="sweetalert-master/dist/sweetalert.min.js"></script><?php

include "../database/koneksi.php";

        if(isset($_POST['registrasi']))
        {
          $nama                = $_POST['nama'];
          $email               = $_POST['email'];
          $username            = $_POST['username'];
          $password            = md5($_POST['password']); 
          $level               = 'user';
          
         
          $cek_username= mysqli_query($koneksi,"  SELECT username FROM user WHERE username ='$username'") or die(mysqli_error($koneksi));
          $cek_email= mysqli_query($koneksi,"  SELECT email FROM user WHERE email ='$email'") or die(mysqli_error($koneksi));
          
          if (mysqli_num_rows($cek_username) != 0) {

            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>username sudah terdaftar..!</div>';
            
          }
          else if (mysqli_num_rows($cek_email) != 0) {

            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>email sudah terdaftar..!</div>';
            
          }
          else {
            $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,username,password,level) VALUES('$nama','$email','$username','$password','$level')") or die(mysqli_error($koneksi));
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
 