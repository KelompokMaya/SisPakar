<link rel="stylesheet" type="text/css" href="proses/sweetalert-master/dist/sweetalert.css">
        <script type="text/javascript" src="proses/sweetalert-master/dist/sweetalert.min.js"></script>

<?php
$id = $_GET['id'];
$v_edit = mysqli_query($koneksi, "SELECT * FROM bagian_teknik WHERE id='$id'") or die (mysqli_error($koneksi));
while($data = mysqli_fetch_assoc($v_edit)){
  ?>
<div class="box box-warning ">
<div  class="box-body">

        <div  style="width: 100%"   class="col-lg-12">
      
            <form id="tambah_teknik"  method="post" enctype="multipart/form-data"  style="left: 10px">
                      


                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-7">
                  <label>Teknik</label>
                  <select name="teknik_id"  class="form-control" >
                    <option >--Pilih Teknik--</option>
                    <option value="1">Teknik Asana</option>
                    <option value="2" >Teknik Pranayama</option>
                    <option value="3" >Teknik Kriya</option>
                    
                  </select>
                  </div>
                 </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-7">
                  <label >Nama Teknik</label>
                  <input type="text" class="form-control" value="<?php echo $data['nama']; ?>" name="nama">
                   </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Posisi</label>
                   <input type="text" class="form-control" value="<?php echo $data['posisi']; ?>" name="posisi">
                    </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Manfaat</label>
                  <textarea rows="4" class="form-control" name="manfaat" ><?php echo $data['manfaat']; ?></textarea>
                   </div>
                 </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Link Video Youtube<small style="font-weight: normal;" > (klik kanan pada video lalu copy url)</small></label>
                  <?php if ($data['video']=='') {
                    ?> 
                    <input type="text" class="form-control"  name="video">
                    <?php
                  } else {?>
                   <input type="text" class="form-control" value="https://youtu.be/<?php echo $data['video']; ?>" name="video">
                   <?php
                  }?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Gambar</label>
                  <input type="file" name="gambar"  placeholder="file">
                    </div>
                  </div>
                </div>
                <input type="hidden" name="gambar-lama"  value="<?php echo $data['gambar']; ?>">

              
               <div class="form-group">
                  <button type="submit" name="edit" style="width: 100px" class="btn btn-warning btn-block">EDIT</button>
                </div>
            </form>
         </div>
         </div>
       

<?php
}

include "../database/koneksi.php";

        if(isset($_POST['edit']))
        {
          
          $teknik_id           = $_POST['teknik_id'];
          $nama                = $_POST['nama'];
          $posisi              = $_POST['posisi'];
          $manfaat             = $_POST['manfaat'];
          $video               = substr($_POST['video'],17);
          $gambar              = $_FILES['gambar']['name'];



          if ($teknik_id!=0) {
                    if (!empty($gambar)) {
                      
                      $tmp                 = $_FILES['gambar']['tmp_name'];

                      if ($teknik_id=='1') {
                        $fotobaru            = $nama.date('_is_').$gambar;
                        $path                = "../images/teknik/asana/".$fotobaru;
                      }
                      elseif ($teknik_id=='2') {
                        $fotobaru            = $nama.date('_is_').$gambar;
                        $path                = "../images/teknik/pranayama/".$fotobaru;
                      }
                      else{
                        $fotobaru            = $nama.date('_is_').$gambar;
                        $path                = "../images/teknik/kriya/".$fotobaru;
                      }
          

                      move_uploaded_file($tmp, $path);
                    }
                    else{
                          $fotobaru=$_POST['gambar-lama'];
                    }



                  $update = mysqli_query($koneksi, " UPDATE bagian_teknik set teknik_id='$teknik_id', nama='$nama', posisi='$posisi',manfaat='$manfaat', video='$video', gambar='$fotobaru' WHERE id='$id' ")or die (mysqli_error($koneksi));

                          if($update)
                              { 
                                 echo '<script>
                              setTimeout(function() {
                                  swal({
                                      title: "Data Berhasil Diedit!",
                                      
                                      type: "success"
                                  }, function() {
                                      window.location = "teknik.php";
                                  });
                              });
                          </script>';

                              }
                            else
                              {
                                echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Sudah Ada..!</div>';
                              }

                }
              else{

                echo '<script>
                 setTimeout(function() {
                 swal({
                    title: "TEKNIK KOSONG!",
                    type: "warning"
                       }, function() {
                            window.location.href="javascript:history.go(-1)";
                        });
                    });
                </script>';
                      }
                      
                

            }

           
         
                 
      ?>
 