<?php
  include("comp/head.php");
  //$_SESSION['pertanyaan']=1;
?>
      <!-- sidebar menu: : style can be found in sidebar.less -->

       <?php 
            if (empty($_SESSION)) { ?>
                <ul class="sidebar-menu">
                  <li class="treeview">
                        <a href="proses/login.php">
                           <span>KONSULTASI</span>
                        </a> 
                  </li>
                 
              <?php
              } else
              {?>
               <!-- User Account: style can be found in dropdown.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                     <li class=" treeview">
                                    <a href="index.php">
                                       <span>KONSULTASI</span>
                                    </a> 
                              </li>
                             
                    <?php }  ?>

                     <li class="  treeview">
                        <a href="teknik/asana.php">
                           <span>TEKNIK ASANA</span>
                        </a>
                    </li>
                    <li class="treeview">
                          <a href="teknik/pranayama.php">
                             <span>TEKNIK PRANAYAMA</span>  
                             </a>     
                    </li>
                    <li class="treeview">
                          <a href="teknik/kriya.php">
                             <span>TEKNIK KRYA</span>
                          </a>
                    </li>
                         <li class="active treeview">
                          <a href="galery.php">
                             <span>GALERY</span>   
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
        Galery
        <small>photo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Galery</a></li>
        
      </ol>
    </section>



      <!-- Main content -->
          <section   class="content">
            <!-- Small boxes (Stat box) -->
            <div  class="row">
              
                              <div class="col-xs-12">
         

                                  <div class="box box-success">
                               
                                      <div class="box-body ">
                                         <?php               
                                             $sql = mysqli_query($koneksi, "SELECT * FROM galery ");
                                             
                                             while($row = mysqli_fetch_assoc($sql))
                                                {
                                                ?>
                                           <div class="col-lg-3 col-xs-6" >
                                              <a target="_blank" href="images/galery/<?= $row['gambar'];?>">
                                                 <img style=" height: 200px; width: 100%;"  src="images/galery/<?= $row['gambar'];?>"  />  
                                              </a>
                                              <h5 style="text-align: center;"><b><?= $row['keterangan'];?></b></h5>
                                          </div>
                                        <?php } ?>
                                     </div>
                                  </div>
                                  
                              </div>
                   
                      

            </div>               
                      
          </section>
         
        </div>




<!-- jQuery 2.2.3 -->
<script src="template/plugins/jQuery/jquery-2.2.3.min.js"></script>



  <!-- /.content-wrapper -->
   <?php include("comp/footer.php")  ?>