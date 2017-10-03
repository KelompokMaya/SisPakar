<?php include("comp/header.php")  ?>
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class=" treeview">
          <a href="index.php">
            <i class="fa fa-server"></i> <span>Data Penyakit</span>
            
          </a>
          
        </li>
        <li class="treeview">
          <a href="input_teknik.php">
            <i class="fa fa-pencil-square-o "></i> <span>Input Data Teknik</span>
            
          </a>
          
        </li>       
         <li class="treeview">
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
        DATA TEKNIK
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

  


    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

<?php include("proses/tambah_teknik.php"); ?>
          
  </div>

 
  <script src="../template/plugins/jQuery/jquery-2.2.3.min.js"></script>

        
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
                      $('#tambah_teknik')
                          .bootstrapValidator({
                              
                             
                              fields: {
                                  teknik_id: {
                                     
                                      validators: {
                                          notEmpty: {
                                              message: 'tidak boleh kosong'
                                          },
                                          
                                      }
                                  },
                                  nama: {
                                     
                                      validators: {
                                          notEmpty: {
                                              message: 'nama tidak boleh kosong'
                                          },
                                          
                                      }
                                  }, 
                                  posisi: {
                                     
                                      validators: {
                                          notEmpty: {
                                              message: 'kolom posisi tidak boleh kosong'
                                          },
                                          
                                      }
                                  },
                                  
                                  
                                  manfaat: {
                                     
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
