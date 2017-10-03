<div class="box box-primary ">
<div  class="box-body">

        <div  style="width: 100%"   class="col-lg-12">
      
            <form id="tambah_data"  method="post" enctype="multipart/form-data"  style="left: 10px">
                      


                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-7">
                  <label >Nama Penyakit</label>
                  <input type="text" class="form-control" name="nama_penyakit">
                  </div>
                 </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Asana</label>
                  <textarea rows="4" class="form-control" name="asana" ></textarea>
                   </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Pranayama</label>
                  <textarea rows="4" class="form-control" name="pranayama" ></textarea>
                    </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Mudra</label>
                  <textarea rows="4" class="form-control" name="mudra" ></textarea>
                   </div>
                 </div>
                </div>
              
               <div class="form-group">
                  <button type="submit" name="add" style="width: 100px" class="btn btn-primary btn-block">Tambah</button>
                </div>
            </form>
         </div>
         </div>

<?php

include "../database/koneksi.php";

        if(isset($_POST['add']))
        {
          $nama_penyakit       = $_POST['nama_penyakit'];
          $asana               = $_POST['asana'];
          $pranayama           = $_POST['pranayama'];
          $mudra               = $_POST['mudra'];
          
         
          
            $insert = mysqli_query($koneksi, "INSERT INTO data_penyakit(nama_penyakit,asana,pranayama,mudra) VALUES('$nama_penyakit','$asana','$pranayama','$mudra')") or die(mysqli_error($koneksi));
              if($insert)
              { 
                 echo '<script>
              setTimeout(function() {
                  swal({
                      title: "Data Tersimpan!",
                      
                      type: "success"
                  }, function() {
                      window.location = "index.php";
                  });
              });
          </script>';

              }
            else
              {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Sudah Ada..!</div>';
              }

        }
        
      ?>
 