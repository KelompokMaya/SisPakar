<?php
  include("comp/head.php");
  //$_SESSION['pertanyaan']=1;
?>
      <!-- sidebar menu: : style can be found in sidebar.less -->

       <?php 
            if (empty($_SESSION)) { ?>
                <ul class="sidebar-menu">
                  <li class="treeview">
                        <a href="../login.php">
                           <span>KONSULTASI</span>
                        </a> 
                  </li>
                  <li class=" active treeview">
                        <a href="asana.php">
                           <span>TEKNIK ASANA</span>
                        </a>
                  </li>
                  <li class="treeview">
                        <a href="login.php">
                           <span>menu 2</span>        
                        </a>     
                  </li>
                  <li class="treeview">
                        <a href="login.php">
                           <span>menu 3</span>
                        </a>
                  </li>
                       <li class="treeview">
                        <a href="login.php">
                           <span>menu 4</span>   
                        </a>
                  </li>    
                </ul>
              <?php
              } else
              {?>
               <!-- User Account: style can be found in dropdown.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                     <li class=" treeview">
                                    <a href="../index.php">
                                       <span>KONSULTASI</span>
                                    </a> 
                              </li>
                              <li class="active treeview">
                                    <a href="asana.php">
                                       <span>TEKNIK ASANA</span>
                                    </a>
                              </li>
                              <li class="treeview">
                                    <a href="#">
                                       <span>menu 2</span>        
                                    </a>     
                              </li>
                              <li class="treeview">
                                    <a href="#">
                                       <span>menu 3</span>
                                    </a>
                              </li>
                                   <li class="treeview">
                                    <a href="#">
                                       <span>menu 4</span>   
                                    </a>
                              </li>   
                  </ul>
                    <?php }  ?>



    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Teknik
        <small>Asana</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Teknik Asana</a></li>
        
      </ol>
    </section>



<!-- Main content -->
    <section   class="content">
      <!-- Small boxes (Stat box) -->
      <div  class="row">
        
       
        <?php
        if(!isset($_GET["view"]))
            {
              
              ?>
               <div class="col-xs-12">
         

          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">

              <table style="font-size: 15px"  id="example1" class="table table-bordered table-striped">
                <thead style="text-align: center; background: #3c8dbc ;color: white">
                <tr>
                  <th width="20px">No</th>
                  <th>Nama</th>
                  <th>Posisi</th>
                  <th>Manfaat</th>
                  <th>Gambar/Video</th>
                </tr>
                </thead>
                <tbody >
                
                <?php
                                
                $sql = mysqli_query($koneksi, "SELECT * FROM bagian_teknik WHERE teknik_id='2' ");
                 $no = 1;
                  while($row = mysqli_fetch_assoc($sql)){

                    ?>
                              <tr>
                                  <td ><?php echo $no?></td>
                                  <td ><?php echo $row['nama'];?></td>
                                  <td ><?php echo $row['posisi'];?></td>
                                  <td ><?php echo $row['manfaat'];?></td>
                                  
                                  <td style="text-align: center;width: 20px;"><a href="asana.php?view=<?php echo $row['id'];?>" class="btn btn-sm btn-info"   ><span  aria-hidden="true"></span> Lihat </a></td>
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
          <!-- /.box -->
          
        </div>
                

          <?php } 
                  else
                      {
                
                        $view=$_GET["view"];
                        

                 $sql = mysqli_query($koneksi, "SELECT * FROM bagian_teknik WHERE id='$view' ");
                 
                  $row = mysqli_fetch_assoc($sql); 

                    ?>
                              <div class="col-xs-12">
         

                                  <div class="box box-danger">
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
                                      <?php }  ?>
                                      <a target="_blank" href="../Images/teknik/asana/<?= $row['gambar'];?>">
                                         <img style="max-width:70%;"  src="../Images/teknik/asana/<?= $row['gambar'];?>"  />
                                      </a>

                                                
                                    </div>

                                    <!-- /.box-body -->
                                    </div>
                                  <!-- /.box 
                        echo substr("Hello world",6); -->
                                  
                                </div>
                          <?php
                          
                      
                  
                  }
                  ?>

                     
                    
                  
               
             
            </section>
   
  </div>


 <!-- modal--> 
<div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
      <img src="../Images/tes.jpg" width="100%" />
      </div>
    </div>
  </div>
</div>

<!-- jQuery 2.2.3 -->
<script src="../template/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script>
      $(document).ready(function(){
          $("#detail").click(function(){
              $("#MyModal").modal();
          });
      });
      </script>

  <!-- /.content-wrapper -->
   <?php include("comp/footer.php")  ?>