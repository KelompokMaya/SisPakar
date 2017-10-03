<!-- jQuery -->


<link rel="stylesheet" type="text/css" href="proses/sweetalert-master/dist/sweetalert.css">
        <script type="text/javascript" src="proses/sweetalert-master/dist/sweetalert.min.js"></script>


<div class="box box-primary ">
<div  class="box-body">

        <div  style="width: 100%"   class="col-lg-12">
      
            <form id="tambah_teknik"  method="post" enctype="multipart/form-data"  style="left: 10px">
                      


                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-7">
                  <label>Teknik</label>
                  <select name="teknik_id" class="form-control" >
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
                  <input type="text" class="form-control" name="nama">
                   </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Posisi</label>
                   <input type="text" class="form-control" name="posisi">
                    </div>
                  </div>
                </div>
                 <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Manfaat</label>
                  <textarea rows="4" class="form-control" name="manfaat" ></textarea>
                   </div>
                 </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Link Video Youtube<small style="font-weight: normal;" > (klik kanan pada video lalu copy url)</small></label>
                   <input type="text" class="form-control" name="video">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div  class="col-lg-12">
                  <label >Gambar</label>
                  <input type="file" name="gambar" placeholder="file">
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
          
          $teknik_id           = $_POST['teknik_id'];
          $nama                = $_POST['nama'];
          $posisi              = $_POST['posisi'];
          $manfaat             = $_POST['manfaat'];
          $video               = substr($_POST['video'],17);
          $gambar              = $_FILES['gambar']['name'];
          
           
              


          if ($teknik_id!=0) {
                $cek = mysqli_query($koneksi, "SELECT * FROM bagian_teknik WHERE nama='$nama'")or die (mysqli_error($koneksi));
                if(mysqli_num_rows($cek) == 0){

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
                      $fotobaru="";
                    }



                      $insert = mysqli_query($koneksi, "INSERT INTO bagian_teknik(teknik_id,nama,posisi,manfaat,video,gambar) VALUES('$teknik_id','$nama','$posisi','$manfaat','$video','$fotobaru')") or die(mysqli_error($koneksi));
                          if($insert)
                              { 
                                 echo '<script>
                              setTimeout(function() {
                                  swal({
                                      title: "Data Tersimpan!",
                                      
                                      type: "success"
                                  }, function() {
                                      window.location = "input_teknik.php";
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
                                title: "NAMA SUDAH ADA!",
                                type: "warning"
                                   }, function() {
                                        window.location = "input_teknik.php";
                                    });
                                });
                            </script>';


                        }
                      }
            else{
            echo '<script>
                 setTimeout(function() {
                 swal({
                    title: "TEKNIK KOSONG!",
                    type: "warning"
                       }, function() {
                            window.location = "input_teknik.php";
                        });
                    });
                </script>';
                      }
                

            }

           
         
                 
      ?>
 