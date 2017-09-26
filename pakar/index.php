<?php include("comp/header.php")  ?>
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="active treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Data Penyakit</span>
            
          </a>
          
        </li>
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Teknik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="status-penyelenggaraan.php"><i class="fa fa-hourglass-2"></i> Asana</a></li>
            <li><a href="penyelenggara-saya.php"><i class="fa fa-bar-chart"></i>Pranayama</a></li>
          </ul>
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
      <!-- Small boxes (Stat box) -->

     
 
     
    <div class="table-responsive box box-success ">
       <?php if (!isset($_GET["view"])) {
        ?>

            
            <!-- /.box-header -->
            <div class="box-body">
              <a href="index.php?view=tambah" style="background-color: green;width: 100px"  class="btn btn-block btn-success">Tambah Data</a>
              </div>
            <div  class="box-body">

              <table style="font-size: 15px"  id="example1" class="table table-bordered table-striped  ">

                <thead style="text-align: center; background: green ;color: white">
                <tr>
                  <th width="5%">No</th>
                  <th width="15%">Penyakit</th>
                  <th width="22%">Asana</th>
                  <th width="22%">Pranayama</th>
                  <th width="21%">mundra</th>
                  <th width="15%" style="text-align: center;">Pilih</th>
                </tr>
                </thead>
                <tbody >
                
                <?php
                                
                $sql = mysqli_query($koneksi, "SELECT * FROM data_penyakit ");
                 $no = 1;
                  while($row = mysqli_fetch_assoc($sql)){

                    ?>
                              <tr>
                                  <td ><?php echo $no?></td>
                                  <td ><?php echo $row['nama_penyakit'];?></td>
                                  <td align="justify"><?php echo $row['asana'];?></td>
                                  <td align="justify"><?php echo $row['pranayama'];?></td>
                                  
                                  <td align="justify"><?php echo $row['mudra'];?></td>
                                  <td style="text-align: center;">
                                    
                                    <a href="#" class="btn btn-sm btn-warning"   data-id='<?php echo $row["id_penyelenggara"]; ?>'><span  aria-hidden="true"></span> Edit </a>
                              
                                    <a href="index.php?view=hapus" Id='<?php echo $row["id"]; ?>' nama= '<?php echo $row["nama_penyakit"]; ?>'   class="btn btn-sm btn-danger" ><span  aria-hidden="true"></span> Hapus </a>
                                  </td>
                            </tr>
                          <?php
                           $no++;
                      
                  }
                  ?>
                
                </tbody>
                
              </table>
                
              
                
            </div>
      
            
            <?php
      }  
      else if ($_GET["view"]=='tambah') 
          { 
            include("proses/tambah.php");
          }
      else if ($_GET["view"]=='hapus') 
          { 
            include("proses/hapus.php");
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
                                                 window.location="index.php?view=hapus&id="+n;
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
                                  
                                  
                                  mudra: {
                                     
                                      validators: {
                                          notEmpty: {
                                              message: 'mudra tidak boleh kosong'
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
