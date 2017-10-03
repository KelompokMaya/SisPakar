
<!-- proses hapus  -->
    <?php
      
        $id = $_GET['id'];
        
        $hapus_file= mysqli_query($koneksi," SELECT * FROM bagian_teknik WHERE id='$id' ");
        $row=mysqli_fetch_assoc($hapus_file);
        if ($row['teknik_id']=='1') {
          $teknik='asana';
        }
        elseif ($row['teknik_id']=='2') {
          $teknik='pranayama';
        }else{
          $teknik='kriya';
        }
        $file=$row['gambar'];

        if ($row['gambar']!='') {
        unlink("../images/teknik/".$teknik."/".$file);  
        }
        

        $delete = mysqli_query($koneksi, "DELETE FROM bagian_teknik WHERE id='$id'");

          if($delete){

                     echo '<script>
              setTimeout(function() {
                  swal({
                      title: "Data Terhapus!",
                      
                      type: "success"
                  }, function() {
                      window.location.href="javascript:history.go(-1)";
                  });
              });
          </script>';

          }else{
            echo "<script>
              
              window.location.href='teknik.php';
              </script>";
          }
        
      
      ?>