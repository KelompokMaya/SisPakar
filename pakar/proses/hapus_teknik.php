
<!-- proses hapus  -->
    <?php
      
        $id = $_GET['id'];
                
        $delete = mysqli_query($koneksi, "DELETE FROM bagian_teknik WHERE id='$id'");
          if($delete){

                     echo '<script>
              setTimeout(function() {
                  swal({
                      title: "Data Terhapus!",
                      
                      type: "success"
                  }, function() {
                      window.location = "teknik.php";
                  });
              });
          </script>';

          }else{
            echo "<script>
              
              window.location.href='teknik.php';
              </script>";
          }
        
      
      ?>