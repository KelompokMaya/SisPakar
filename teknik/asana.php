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
                
                <tr>
                  <td>1</td>
                  <td> DS browser</td>
                  <td>Berdiri </td>
                   <td>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. </td>
                  <td style="text-align: center"><a href="#" class="btn btn-sm btn-info" id="detail"  ><span  aria-hidden="true"></span> Lihat </a></td>
                  
                </tr>
                <tr>
                  <td>2</td>
                  <td>Konqureror 3.1</td>
                  <td>Duduk</td>
                   <td>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. </td>
                  <td style="text-align: center"><a href="asana.php?view=<?php echo 1?>" class="btn btn-sm btn-info"   ><span  aria-hidden="true"></span> Lihat </a></td>
                </tr>
                
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
                        $sql  = mysqli_query($koneksi, "SELECT * FROM data_penyakit WHERE id = '$view' ");
                        $row = mysqli_fetch_array($sql);
                        ?>
                          <div class="col-xs-12">
         

                                  <div class="box ">
                                    <div class="box-header with-border">
                                              <h3 class="box-title">Video bla bla</h3>
                                            </div>
                                    <!-- /.box-header -->
                                    <div class="box-body text-center">
                                      
                                      <div class="video">
                                                <iframe width="560" height="315" src="http://www.youtube.com/embed/lGk75O18xyY" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                    </div>
                                    <!-- /.box-body -->
                                    </div>
                                  <!-- /.box 
                        echo substr("Hello world",6); -->
                                  
                                </div>
                        <?php  } ?>

                     
                    
                  
               
             
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