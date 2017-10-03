<?php include("comp/header.php")  ?>
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class=" treeview">
          <a href="index.php">
            <i class="fa fa-server"></i> <span>Data Teknik</span>
            
          </a>
          
        </li>
        <li class="treeview">
          <a href="input_teknik.php">
            <i class="fa fa-pencil-square-o "></i> <span>Input Data Teknik</span>
            
          </a>
          
        </li>       
         <li class="active treeview">
          <a href="teknik.php">
            <i class="fa fa-gear "></i> <span>Teknik</span>
            
          </a>
          
        </li>  
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA PENYAKIT
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

  


    <!-- Main content -->
    <section class="content">
   
     
    
       <?php if (!isset($_GET["view"])) {
        ?>
            <div class="table-responsive box box-primary ">
            
            <!-- /.box-header -->
            <div class="box-body">
             <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Teknik Asana</a></li>
              <li><a href="#tab_2" data-toggle="tab">Teknik Pranayama</a></li>
              <li><a href="#tab_3" data-toggle="tab">Teknik Kriya</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                      
                          <div class="box-body">

                            <table style="font-size: 15px"  id="example1" class="table table-bordered table-striped">
                              <thead style="text-align: center; background: #3998ad ;color: white">
                              <tr>
                                <th width="20px">No</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Manfaat</th>
                                <th>Gambar/Video</th>
                                <th style="width: 100px;">Pilih</th>
                              </tr>
                              </thead>
                              <tbody >
                              
                              <?php
                                              
                              $sql = mysqli_query($koneksi, "SELECT * FROM bagian_teknik WHERE teknik_id='1' order by nama asc ");
                               $no = 1;
                                while($row = mysqli_fetch_assoc($sql)){

                                  ?>
                                            <tr>
                                                <td ><?php echo $no?></td>
                                                <td ><?php echo $row['nama'];?></td>
                                                <td ><?php echo $row['posisi'];?></td>
                                                <td ><?php echo $row['manfaat'];?></td>
                                                <td style="text-align: center;width: 20px;"><a href="asana.php?view=<?php echo $row['id'];?>" class="btn btn-sm btn-info"   ><span  aria-hidden="true"></span> Lihat </a></td>
                                                
                                                <td style="text-align: center">
                                    
                                                    <a href="teknik.php?view=edit&id=<?php echo $row["id"];?>" class="btn btn-sm btn-warning"><span  aria-hidden="true"></span> Edit </a>
                                              
                                                    <a href="teknik.php?view=hapus" Id='<?php echo $row["id"]; ?>' nama= '<?php echo $row["nama"]; ?>'   class="btn btn-sm btn-danger" ><span  aria-hidden="true"></span> Hapus </a>
                                              </td>
                                          </tr>
                                        <?php
                                         $no++;
                                    
                                }
                                ?>
                              
                              </tbody>
                              
                            </table>
                          </div>
                          <!-- /.box-body -->
                        
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
               
            
                          <!-- /.box-header -->
                          <div class="box-body">

                            <table style="font-size: 15px"  id="example2" class="table table-bordered table-striped">
                              <thead style="text-align: center; background: red ;color: white">
                              <tr>
                                <th width="20px">No</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Manfaat</th>
                                <th>Gambar/Video</th>
                                <th style="width: 100px;">Pilih</th>
                              </tr>
                              </thead>
                              <tbody >
                              
                              <?php
                                              
                              $sql = mysqli_query($koneksi, "SELECT * FROM bagian_teknik WHERE teknik_id='2' order by nama asc ");
                               $no = 1;
                                while($row = mysqli_fetch_assoc($sql)){

                                  ?>
                                            <tr>
                                                <td ><?php echo $no?></td>
                                                <td ><?php echo $row['nama'];?></td>
                                                <td ><?php echo $row['posisi'];?></td>
                                                <td ><?php echo $row['manfaat'];?></td>
                                                <td style="text-align: center;width: 20px;"><a href="asana.php?view=<?php echo $row['id'];?>" class="btn btn-sm btn-info"   ><span  aria-hidden="true"></span> Lihat </a></td>
                                                
                                                <td style="text-align: center;">
                                    
                                                    <a href="teknik.php?view=edit&id=<?php echo $row["id"];?>" class="btn btn-sm btn-warning"><span  aria-hidden="true"></span> Edit </a>
                                              
                                                    <a href="teknik.php?view=hapus" Id='<?php echo $row["id"]; ?>' nama= '<?php echo $row["nama"]; ?>'   class="btn btn-sm btn-danger" ><span  aria-hidden="true"></span> Hapus </a>
                                              </td>
                                          </tr>
                                        <?php
                                         $no++;
                                    
                                }
                                ?>
                              
                              </tbody>
                              
                            </table>
                          </div>
                        
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                
            
                          <!-- /.box-header -->
                          <div class="box-body">

                            <table style="font-size: 15px"  id="example3" class="table table-bordered table-striped">
                              <thead style="text-align: center; background: #ff851b ;color: white">
                              <tr>
                                <th width="20px">No</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Manfaat</th>
                                <th>Gambar/Video</th>
                                <th style="width: 100px;">Pilih</th>
                              </tr>
                              </thead>
                              <tbody >
                              
                              <?php
                                              
                              $sql = mysqli_query($koneksi, "SELECT * FROM bagian_teknik WHERE teknik_id='3' order by nama asc ");
                               $no = 1;
                                while($row = mysqli_fetch_assoc($sql)){

                                  ?>
                                            <tr>
                                                <td ><?php echo $no?></td>
                                                <td ><?php echo $row['nama'];?></td>
                                                <td ><?php echo $row['posisi'];?></td>
                                                <td ><?php echo $row['manfaat'];?></td>
                                                <td style="text-align: center;width: 20px;"><a href="asana.php?view=<?php echo $row['id'];?>" class="btn btn-sm btn-info"   ><span  aria-hidden="true"></span> Lihat </a></td>
                                                
                                                <td style="text-align: center;">
                                    
                                                    <a href="teknik.php?view=edit&id=<?php echo $row["id"];?>" class="btn btn-sm btn-warning"><span  aria-hidden="true"></span> Edit </a>
                                              
                                                    <a href="teknik.php?view=hapus" Id='<?php echo $row["id"]; ?>' nama= '<?php echo $row["nama"]; ?>'   class="btn btn-sm btn-danger" ><span  aria-hidden="true"></span> Hapus </a>
                                              </td>
                                          </tr>
                                        <?php
                                         $no++;
                                    
                                }
                                ?>
                              
                              </tbody>
                              
                            </table>
                          </div>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
              </div>

      
            
            <?php
      }  
      else if ($_GET["view"]=='hapus') 
          { 
            include("proses/hapus_teknik.php");
        }
        else if ($_GET["view"]=='edit') 
          { 
            include("proses/edit_teknik.php");
        }
        ?>

          </div>
          
  </div>

 
 <!-- jQuery -->
 <script src="../template/plugins/jQuery/jquery-2.2.3.min.js"></script>

<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
        <script type="text/javascript" src="sweetalert-master/dist/sweetalert.min.js"></script>

        
        <!---script alret logout href="konfirmasi-tim.php?aksi=delete&id_tim='.$row['id_tim'].'"-->
                      <script>
                              jQuery(document).ready(function($){
                                  $('.btn-danger').on('click',function(){
                                     var getLink = $(this).attr('href');
                                    var n = $(this).attr("Id");
                                    var m = $(this).attr("nama");

                                      swal({
                                              title: "Apakah Anda Yakin Ingin Menghapus "+m+" ?",
                                              
                                              type: "warning",
                                              showCancelButton: true,
                                              confirmButtonColor: "#DD6B55",
                                              confirmButtonText: "Ya",
                                              closeOnConfirm: false
                                              },function(){
                                                 window.location="teknik.php?view=hapus&id="+n;
                                          });
                                      return false;
                                  });
                              });
                      </script>

  




    

<!---script edit-->
<script>
$(document).ready(function(){
    $("#edit").click(function(){
        $("#Modal-edit-profil").modal();
    });
});
</script>

<script src="../template/bootstrap/js/bootstrapValidator.js"></script>
 <script src="../template/bootstrap/js/bootstrapValidator.min.js"></script>

      <script type="text/javascript">
                  $(document).ready(function() {
                      $('#tambah_data')
                          .bootstrapValidator({
                              
                             
                              fields: {
                                  nama_penyakit: {
                                     
                                      validators: {
                                          notEmpty: {
                                              message: 'Nama Penyakit tidak boleh kosong'
                                          },
                                          
                                      }
                                  },
                                  asana: {
                                     
                                      validators: {
                                          notEmpty: {
                                              message: 'asana tidak boleh kosong'
                                          },
                                          
                                      }
                                  }, 
                                  pranayama: {
                                     
                                      validators: {
                                          notEmpty: {
                                              message: 'pranayama tidak boleh kosong'
                                          },
                                          
                                      }
                                  },
                                  
                                  
                                  kriya: {
                                     
                                      validators: {
                                          notEmpty: {
                                              message: 'kriya tidak boleh kosong'
                                          },
                                          
                                      }
                                  },
                                  
                                  
                              }
                          });
                      });
              </script> 

<?php include("comp/footer.php")  ?>

</body>
</html>
