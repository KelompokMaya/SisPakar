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
                                  
                                <?php include("data_teknik/data_asana.php") ?>
                                    
                          </div>
                        <!-- /.tab-pane -->
                          <div class="tab-pane" id="tab_2">
                           
                                 <?php include("data_teknik/data_pranayama.php") ?>
                                      
                                    
                          </div>
                        <!-- /.tab-pane -->
                          <div class="tab-pane" id="tab_3">
                            
                                  <?php include("data_teknik/data_kriya.php") ?>
                                     
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
            }else
                      {
                
                $view=$_GET["view"];
                        

                 $sql = mysqli_query($koneksi, "SELECT * FROM bagian_teknik WHERE id='$view' ");
                 
                  $row = mysqli_fetch_assoc($sql); 

                    ?>        
                    <div class="table-responsive box box-primary ">
                  
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="box-header with-border">
                                              <h3 ><b style="display: flex; justify-content: center;"><?= $row['nama'];?></b> </h3>
                                            </div>
                                    <!-- /.box-header -->
                                    <div class="box-body text-center">
                                      <?php if ($row['video']!='') {
                                       ?>
                                      <div class="video">
                                                <iframe  src="http://www.youtube.com/embed/<?= $row['video'];?>" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                      <?php }
                                      if ($row['teknik_id']=='1') {
                                          $teknik='asana';
                                        }
                                        elseif ($row['teknik_id']=='2') {
                                          $teknik='pranayama';
                                        }else{
                                          $teknik='kriya';
                                        }
                                      ?>
                                      <a target="_blank" href="../Images/teknik/pranayama/<?= $row['gambar'];?>">
                                         <img style="max-width:70%;"  src="../images/teknik/<?= $teknik;?>/<?= $row['gambar'];?>"  />
                                      </a>

                                                
                                    </div>

                  </div>
                              
                          <?php
                          
                      
                  
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
