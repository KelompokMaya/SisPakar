
<!-- proses hapus  -->
    <?php
      
        $id = $_GET['id'];
                
        $delete = mysqli_query($koneksi, "DELETE FROM data_penyakit WHERE id='$id'");
          if($delete){

                     echo '<script>
              setTimeout(function() {
                  swal({
                      title: "Data Terhapus!",
                      
                      type: "success"
                  }, function() {
                      window.location = "index.php";
                  });
              });
          </script>';

          }else{
            echo "<script>
              
              window.location.href='index.php';
              </script>";
          }
        
      
      ?>