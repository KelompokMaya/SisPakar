<?php
$id = $_GET['id'];
$v_edit = mysqli_query($koneksi, "SELECT * FROM data_penyakit WHERE id='$id'") or die (mysqli_error($koneksi));
while($data = mysqli_fetch_assoc($v_edit)){
  ?>
<div class="box box-warning ">
<div  class="box-body">

        <div  style="width: 100%"   class="col-lg-12">
      
            <form id="tambah_data"  method="post" enctype="multipart/form-data"  style="left: 10px">
                      


                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-7">
                  <label >Nama Penyakit</label>
                  <input type="text" class="form-control" value="<?php echo $data['nama_penyakit']; ?>" name="nama_penyakit">
                  </div>
                 </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Asana</label>
                  <textarea rows="4" class="form-control" name="asana" > <?php echo $data['asana']; ?></textarea>
                   </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Pranayama</label>
                  <textarea rows="4" class="form-control" name="pranayama" ><?php echo $data['pranayama']; ?></textarea>
                    </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Kriya</label>
                  <textarea rows="4" class="form-control"  name="kriya" ><?php echo $data['kriya']; ?></textarea>
                   </div>
                 </div>
                </div>
              
               <div class="form-group">
                  <button type="submit" name="edit" style="width: 100px" class="btn btn-warning btn-block">Edit</button>
                </div>
            </form>
         </div>
         </div>

<?php
}

include "../database/koneksi.php";

        if(isset($_POST['edit']))
        {
          $nama_penyakit       = $_POST['nama_penyakit'];
          $asana               = $_POST['asana'];
          $pranayama           = $_POST['pranayama'];
          $kriya               = $_POST['kriya'];
          
         
          
            $update = mysqli_query($koneksi, " UPDATE data_penyakit set nama_penyakit='$nama_penyakit', asana='$asana', pranayama='$pranayama', kriya='$kriya' WHERE id='$id' ") or die(mysqli_error($koneksi));
              if($update)
              { 
                 echo '<script>
              setTimeout(function() {
                  swal({
                      title: "Data Berhasil Diubah!",
                      
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
 